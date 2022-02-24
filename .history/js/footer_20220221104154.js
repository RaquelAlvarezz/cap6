class Footer extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
      this.innerHTML = `
      <style>
      .footer {
          position:absolute;
          bottom:0;
          width:100vw;
      }
      </style>
      <div class="footer" style="margin-bottom:0;">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-white">
  <div class="col-md-4 d-flex align-items-center">
    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
    </a>
    <span class="text-muted">Raquel Álvarez, 2022 © </span>
  </div>
</footer>
</div>
      `;
    }
  }
  
  customElements.define('footer-component', Footer);