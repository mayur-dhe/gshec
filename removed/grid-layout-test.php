
<style>
ul[class] {
  margin: 0;
  padding: 12px;
}
ul[class] li {
  list-style: none;
}
ul[class] li > * {
  margin: 1rem;
}
:focus {
  box-shadow: 0 0 0 0.25rem rebeccapurple;
  outline: 0;
}
/* [1] 'auto-fit' grid columns, so no media queries required. */
/* [2] 'dense' packing fills in holes earlier in the grid. */
.grid {
  display: grid;
  grid-gap: 1rem; 
  grid-auto-flow: dense; /* [2] */
  grid-template-columns: repeat(auto-fit, 23rem); /* [1] */
  justify-content: center;
  height: 100% !important;
  background-color: black;
}
.grid > * {
  align-items: flex-start;
  background: #eee;
  display: flex;
  flex-direction: column;
  height: 100%;
}
/* [3] Make fullwidth card span all grid columns. */
.fullwidth {
  grid-column: 1 / -1;
}
.is-hidden {
  display: none;
}
.fullwidth,
.is-selected {
  background: wheat;
}
</style>




<div class="col-md-12">
  <ul class="grid">
    <?php
      foreach ($rdi_images['data'] as $key => $value) {
        if ($value['type'] == 'Goa Science Lecture Series 1') {
          ?>
          <li>
            <button type="button" data-quick-view 
              style="background: <?php echo $value['url'] ?>" >
              <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" class="g_img_cover" style="background-color:#000;">
            </button>
          </li>
          <li class="fullwidth is-hidden" id="quickview-01">
            <button type="button" data-close>
              qqqq
              <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" class="g_img_cover" style="background-color:#000;">
            </button>
          </li>
          <?php
        }
      }
    ?>
  </ul>
</div>



<script>
      const quickViewButtons = document.querySelectorAll('[data-quick-view]');
      const closeButtons = document.querySelectorAll('[data-close]');
      const fullwidthCards = document.querySelectorAll('.fullwidth');
      let toggle; // Quick view <button>.
      let toggleParent; // <li>.
      let fullwidth; // Fullwidth card to be "injected".

      const openQuickView = (toggle, toggleParent, fullwidth) => {
          toggle.setAttribute('aria-expanded', 'true');
          toggleParent.classList.toggle('is-selected');
          fullwidth.classList.toggle('is-hidden');
          // Make fullwidth card keyboard focusable.
          fullwidth.setAttribute('tabIndex', '0');
      };

      const closeQuickView = (toggle, toggleParent, fullwidth) => {
          toggle.setAttribute('aria-expanded', 'false');
          toggleParent.classList.toggle('is-selected');
          fullwidth.classList.toggle('is-hidden');
          fullwidth.removeAttribute('tabIndex');
      };

      quickViewButtons.forEach(quickView => {
          // Add appropriate ARIA attributes for "toggle" behaviour.
          fullwidth = quickView.parentElement.nextElementSibling;
          quickView.setAttribute('aria-expanded', 'false');
          quickView.setAttribute('aria-controls', fullwidth.id);

          quickView.addEventListener('click', (e) => {
              toggle = e.target;
              toggleParent = toggle.parentElement;
              fullwidth = toggleParent.nextElementSibling;

              // Open (or close) fullwidth card.
              if (toggle.getAttribute('aria-expanded') === 'false') {
                  // Do we have another fullwidth card already open? If so, close it.
                  fullwidthCards.forEach(fullwidthOpen => {
                      if (!fullwidthOpen.classList.contains('is-hidden')) {
                          toggleParentOpen =
                              fullwidthOpen.previousElementSibling;
                          toggleOpen = toggleParentOpen.querySelector(
                              '[data-quick-view]'
                          );

                          closeQuickView(toggleOpen, toggleParentOpen, fullwidthOpen);
                      }
                  });
                openQuickView(toggle, toggleParent, fullwidth);
            } else {
                closeQuickView(toggle, toggleParent, fullwidth);
            }
        });
      });

      closeButtons.forEach(close => {
        close.addEventListener('click', (e) => {
            fullwidth = e.target.parentElement;
            toggleParent = e.target.parentElement.previousElementSibling;
            toggle = toggleParent.querySelector('[data-quick-view]');

            closeQuickView(toggle, toggleParent, fullwidth);
            toggle.focus(); // Return keyboard focus to "toggle" button.
        });
      });
  </script>
