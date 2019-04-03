<body class="settings">
  <div>
    <div class="max-width">
      <section class="payment turquoise">
        <div class="grid-full padded-reverse">
          <div class="grid-whole padded">
            <h3>Payment Details</h3>
            <hr>
          </div>
          <div class="column grid12 padded m-grid-whole s-grid-whole xs-grid-whole">
            <form id="payment-form" action="/cards" accept-charset="UTF-8" method="post">
              <input name="utf8" type="hidden" value="✓">
              <div class="grid-whole">
                <label for="card-number">
                  <span class="upper-bryant small-bold">Card Number</span>
                </label>
                <input type="number" class="space" size="20" name="card-number" id="card-number">
              </div>
              <div class="grid-whole padded-reverse">
                <div class="column grid5 padded">
                  <div class="column grid5">
                    <label for="cvc">
                      <span class="upper-bryant small-bold">CVC</span>
                      <input type="number" class="space" size="4" name="cvc" id="cvc">
                    </label>
                  </div>
                  <div class="column grid3 cvc-box center">
                    <img class="cvc" src="http://www.thisisstar.com/images/100UI/002/cvc_opt.svg">
                  </div>
                </div>
                <div class="column grid7 padded">
                  <div class="grid-whole">
                    <span class="upper-bryant small-bold">
                <label for="exp-month">
                  Expiration
                </label>
              </span>
                    <span class="upper-bryant micro">
                <label for="exp-year">
                  (MM/YYYY)
                </label>
              </span>
                  </div>
                  <div class="column grid4">
                    <input type="number" class="space" size="2" data-stripe="exp-month" id="exp-month">
                  </div>
                  <div class="column grid2 center huge valign-dollar">
                    <span class="upper-bryant tall-slash"> / </span>
                  </div>
                  <div class="column grid6">
                    <input type="number" class="space" size="4" id="exp-year">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn" id="update-payment">Update Card</button>
            </form>
          </div>
          <div class="clear"></div>
        </div>
      </section>
    </div>
  </div>
</body>