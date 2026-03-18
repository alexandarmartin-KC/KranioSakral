(function () {
  const defaultPath = '/assets/content/priser-booking.default.json';

  const fieldMap = {
    bookTitle: 'pb-book-title',
    bookIntro: 'pb-book-intro',
    beforeFirst: 'pb-before-first',
    consultation: 'pb-consultation',
    response: 'pb-response',
    pricesTitle: 'pb-prices-title',
    pricesIntro: 'pb-prices-intro',
    priceSingleLabel: 'pb-price-single-label',
    priceSingleValue: 'pb-price-single-value',
    priceClipLabel: 'pb-price-clip-label',
    priceClipValue: 'pb-price-clip-value',
    priceNote: 'pb-price-note',
    paymentTitle: 'pb-payment-title',
    paymentText: 'pb-payment-text',
    cancelTitle: 'pb-cancel-title',
    cancelLine1: 'pb-cancel-line1',
    cancelLine2: 'pb-cancel-line2',
    practicalTitle: 'pb-practical-title',
    addressTitle: 'pb-address-title',
    addressLine1: 'pb-address-line1',
    addressLine2: 'pb-address-line2',
    practicalText: 'pb-practical-text',
    faqTitle: 'pb-faq-title',
    faq1Question: 'pb-faq1-question',
    faq1Answer: 'pb-faq1-answer',
    faq2Question: 'pb-faq2-question',
    faq2Answer: 'pb-faq2-answer',
    faq3Question: 'pb-faq3-question',
    faq3Answer: 'pb-faq3-answer',
    ctaTitle: 'pb-cta-title',
    ctaIntro: 'pb-cta-intro',
    ctaOutro: 'pb-cta-outro',
    signoff: 'pb-signoff',
    name: 'pb-name'
  };

  function setText(id, value) {
    if (typeof value !== 'string') {
      return;
    }

    const element = document.getElementById(id);
    if (element) {
      element.textContent = value;
    }
  }

  function setContact(content) {
    const phoneLinkTop = document.getElementById('pb-phone-top-link');
    const phoneTextTop = document.getElementById('pb-phone-top-text');
    const mailLinkTop = document.getElementById('pb-mail-top-link');
    const mailTextTop = document.getElementById('pb-mail-top-text');

    const phoneLinkCta = document.getElementById('pb-phone-cta-link');
    const phoneTextCta = document.getElementById('pb-phone-cta-text');
    const mailLinkCta = document.getElementById('pb-mail-cta-link');
    const mailTextCta = document.getElementById('pb-mail-cta-text');

    if (typeof content.phone === 'string' && content.phone.trim()) {
      const phoneClean = content.phone.replace(/\s+/g, '');
      const phoneHref = 'tel:+45' + phoneClean;

      if (phoneLinkTop) phoneLinkTop.setAttribute('href', phoneHref);
      if (phoneTextTop) phoneTextTop.textContent = 'Telefon: ' + content.phone;

      if (phoneLinkCta) phoneLinkCta.setAttribute('href', phoneHref);
      if (phoneTextCta) phoneTextCta.textContent = 'Telefon: ' + content.phone;
    }

    if (typeof content.email === 'string' && content.email.trim()) {
      const mailHref = 'mailto:' + content.email;

      if (mailLinkTop) mailLinkTop.setAttribute('href', mailHref);
      if (mailTextTop) mailTextTop.textContent = 'Mail: ' + content.email;

      if (mailLinkCta) mailLinkCta.setAttribute('href', mailHref);
      if (mailTextCta) mailTextCta.textContent = 'Mail: ' + content.email;
    }
  }

  function applyContent(content) {
    Object.keys(fieldMap).forEach(function (key) {
      setText(fieldMap[key], content[key]);
    });

    setContact(content);
  }

  async function loadDefaults() {
    const response = await fetch(defaultPath, { cache: 'no-store' });
    if (!response.ok) {
      throw new Error('Kunne ikke hente standardindhold.');
    }

    return response.json();
  }

  async function init() {
    try {
      const content = await loadDefaults();
      applyContent(content);
    } catch {
      // Keep existing HTML fallback text.
    }
  }

  init();
})();
