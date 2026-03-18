const menuToggleButton = document.querySelector("[data-menu-toggle]");
const nav = document.querySelector("[data-nav]");

if (menuToggleButton && nav) {
  menuToggleButton.addEventListener("click", () => {
    nav.classList.toggle("open");
    nav.classList.toggle("show");
  });
}

const COOKIE_KEY = "kst_cookie_preferences";

function getSavedConsent() {
  try {
    const raw = localStorage.getItem(COOKIE_KEY);
    return raw ? JSON.parse(raw) : null;
  } catch {
    return null;
  }
}

function saveConsent(preferences) {
  localStorage.setItem(COOKIE_KEY, JSON.stringify(preferences));
}

function loadAnalyticsIfAllowed(consent) {
  const measurementId = "G-XXXXXXXXXX";
  if (!consent?.statistics || measurementId === "G-XXXXXXXXXX") {
    return;
  }

  const script = document.createElement("script");
  script.async = true;
  script.src = `https://www.googletagmanager.com/gtag/js?id=${measurementId}`;
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag() {
    window.dataLayer.push(arguments);
  }
  gtag("js", new Date());
  gtag("config", measurementId, { anonymize_ip: true });
}

function initCookieBanner() {
  const banner = document.querySelector("[data-cookie-banner]");
  if (!banner) {
    return;
  }

  const acceptAll = banner.querySelector("[data-accept-all]");
  const rejectAll = banner.querySelector("[data-reject-all]");
  const openPrefs = banner.querySelector("[data-open-preferences]");
  const savePrefs = banner.querySelector("[data-save-preferences]");
  const preferencesBox = banner.querySelector("[data-cookie-preferences]");
  const statsInput = banner.querySelector("[name='cookie_statistics']");
  const marketingInput = banner.querySelector("[name='cookie_marketing']");

  const existingConsent = getSavedConsent();
  if (existingConsent) {
    loadAnalyticsIfAllowed(existingConsent);
    return;
  }

  banner.classList.add("visible");

  acceptAll?.addEventListener("click", () => {
    const consent = { necessary: true, statistics: true, marketing: true };
    saveConsent(consent);
    loadAnalyticsIfAllowed(consent);
    banner.classList.remove("visible");
  });

  rejectAll?.addEventListener("click", () => {
    const consent = { necessary: true, statistics: false, marketing: false };
    saveConsent(consent);
    banner.classList.remove("visible");
  });

  openPrefs?.addEventListener("click", () => {
    preferencesBox?.classList.toggle("visible");
  });

  savePrefs?.addEventListener("click", () => {
    const consent = {
      necessary: true,
      statistics: Boolean(statsInput?.checked),
      marketing: Boolean(marketingInput?.checked)
    };
    saveConsent(consent);
    loadAnalyticsIfAllowed(consent);
    banner.classList.remove("visible");
  });
}

initCookieBanner();