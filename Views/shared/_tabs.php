
    <div id="wizard">
        <!-- SECTION 1 -->
        <h4></h4>
        <section>
            <div class="form-row form-group">
                <div class="form-holder">
                    <label for="">
                    First Name *
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-holder">
                    <label for="">
                    Last Name *
                    </label>
                    <input type="text" class="form-control">
                </div>
            </div>	
            <div class="form-row">
                <label for="">
                    Company Name
                </label>
                <input type="text" class="form-control">
            </div>	
            <div class="form-row">
                <label for="">
                    Country *
                </label>
                <div class="form-holder">
                    <select name="" id="" class="form-control">
                        <option value="viet nam" class="option">Viet Nam</option>
                        <option value="united states" class="option">United States</option>
                        <option value="united kingdom" class="option">United Kingdom</option>
                    </select>
                    <i class="zmdi zmdi-caret-down"></i>
                </div>
            </div>	
            <div class="form-row">
                <label for="">
                    Address *
                </label>
                <input type="text" class="form-control" placeholder="Street address" style="margin-bottom: 20px">
                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
            </div>	
            <div class="form-row">
                <label for="">
                    Town / City *
                </label>
                <input type="text" class="form-control">
            </div>
        </section>
        
        <!-- SECTION 2 -->
        <h4></h4>
        <section>
            <div class="form-row">
                <label for="">
                    County *
                </label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <label for="">
                    Postcode / Zip *
                </label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row form-group">
                <div class="form-holder">
                    <label for="">
                    Phone *
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-holder">
                    <label for="">
                    Email Address *
                    </label>
                    <input type="text" class="form-control">
                </div>
            </div>	
            <div class="form-row" style="margin-bottom: 18px">
                <label for="">
                    Order Notes
                </label>
                <textarea name="" id="" class="form-control" placeholder="Note about your order, eg. special notes fordelivery." style="height: 149px"></textarea>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Create an account?
                    <span class="checkmark"></span>
                </label>
            </div>
        </section>

        <!-- SECTION 3 -->
        <h4></h4>
        <section>
            <div class="product">
                <div class="item">
                    <div class="left">
                        <a href="#" class="thumb">
                            <img src="images/item-1.png" alt="">
                        </a>
                        <div class="purchase">
                            <h6>
                                <a href="#">Low Table/Stool</a>
                            </h6>
                            <span>x4</span>
                        </div>
                    </div>
                    <span class="price">$29</span>
                </div>
                <div class="item">
                    <div class="left">
                        <a href="#" class="thumb">
                            <img src="images/item-2.png" alt="">
                        </a>
                        <div class="purchase">
                            <h6>
                                <a href="#">Set of 3 Porcelain</a>
                            </h6>
                            <span>x2</span>
                        </div>
                    </div>
                    <span class="price">$124</span>
                </div>
            </div>
            <div class="checkout">
                <div class="subtotal">
                    <span class="heading">Subtotal</span>
                    <span>$364</span>
                </div>
                <p class="shipping">
                    <span class="heading">Shipping</span>
                there are no shipping methods available. please double check your address, or contact us if you need any help.
                </p>
                <div class="total">
                    <span class="heading">Subtotal</span>
                    <span class="total-price">$364</span>
                </div>
            </div>
        </section>

        <!-- SECTION 4 -->
        <h4></h4>
        <section>
            <div class="checkbox-circle">
                <label class="active">
                    <input type="radio" name="billing method" value="Direct bank transfer" checked>Direct bank transfer>
                    <span class="checkmark"></span>
                    <div class="tooltip">
                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                    </div>
                </label>
                <label>
                    <input type="radio" name="billing method" value="Check payments">Check payments
                    <span class="checkmark"></span>
                    <div class="tooltip">
                        Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                    </div>
                </label>
                <label>
                    <input type="radio" name="billing method" value="Cash on delivery">Cash on delivery
                    <span class="checkmark"></span>
                    <div class="tooltip">
                        Pay with cash upon delivery.
                    </div>
                </label>
            </div>
        </section>
    </div>

<style>


:focus {
  outline: none; }

textarea {
  resize: none; }

input, textarea, select, button {
  font-family: "Poppins-Regular";
  font-size: 15px;
  color: #666; }

p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }

ul {
  padding: 0;
  margin: 0;
  list-style: none; }

a {
  text-decoration: none; }

textarea {
  resize: none; }

select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  border: none; }
  select option[value=""][disabled] {
    display: none; }

img {
  max-width: 100%;
  vertical-align: middle; }

body {
  background: url("../images/form-wizard-bg.jpg");
  background-size: cover; }

.wrapper {
  max-width: 1400px;
  height: 100vh;
  margin: auto;
  display: flex;
  align-items: center; }
  .wrapper .image-holder {
    width: 51%; }
  .wrapper form {
    width: 49%; }

.wizard > .steps .current-info, .wizard > .steps .number {
  display: none; }

#wizard {
  min-height: 834px;
  background: #fff;
  margin-right: 60px;
  padding: 107px 75px 65px; }

.steps {
  margin-bottom: 30px; }
  .steps ul {
    display: flex;
    position: relative; }
    .steps ul li {
      width: 20.16%;
      margin-right: 10px; }
      .steps ul li a {
        display: inline-block;
        width: 100%;
        height: 7px;
        background: #e6e6e6;
        border-radius: 3.5px; }
      .steps ul li.first a, .steps ul li.checked a {
        background: #f3d4b7;
        transition: all 0.5s ease; }
    .steps ul:before {
      content: "Billing Details";
      font-size: 22px;
      font-family: "Poppins-SemiBold";
      color: #333;
      top: -38px;
      position: absolute; }
    .steps ul.step-2:before {
      content: "Additional Information"; }
    .steps ul.step-3:before {
      content: "Your Order"; }
    .steps ul.step-4:before {
      content: "Billing Method"; }

h3 {
  font-family: "Poppins-SemiBold"; }

.form-row {
  margin-bottom: 24px; }
  .form-row label {
    margin-bottom: 8px;
    display: block; }
  .form-row.form-group {
    display: flex; }
    .form-row.form-group .form-holder {
      width: 50%;
      margin-right: 21px; }
      .form-row.form-group .form-holder:last-child {
        margin-right: 0; }

.form-holder {
  position: relative; }
  .form-holder i {
    position: absolute;
    top: 11px;
    right: 19px;
    font-size: 17px;
    color: #999; }

.form-control {
  height: 42px;
  border: 1px solid #e6e6e6;
  background: none;
  width: 100%;
  padding: 0 18px; }
  .form-control:focus {
    border-color: #f3d4b7; }
  .form-control::-webkit-input-placeholder {
    color: #999;
    font-size: 13px; }
  .form-control::-moz-placeholder {
    color: #999;
    font-size: 13px; }
  .form-control:-ms-input-placeholder {
    color: #999;
    font-size: 13px; }
  .form-control:-moz-placeholder {
    color: #999;
    font-size: 13px; }

textarea.form-control {
  padding-top: 11px;
  padding-bottom: 11px; }

.option {
  color: #999; }

.actions ul {
  display: flex;
  margin-top: 30px;
  justify-content: space-between; }
  .actions ul.step-last {
    justify-content: flex-end; }
    .actions ul.step-last li:first-child {
      display: none; }
.actions li a {
  padding: 0;
  border: none;
  display: inline-flex;
  height: 51px;
  width: 135px;
  align-items: center;
  background: #f3d4b7;
  cursor: pointer;
  position: relative;
  padding-left: 41px;
  color: #333;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  font-weight: 400; }
  .actions li a:before {
    content: '\f2ee';
    position: absolute;
    top: 19px;
    right: 41px;
    font-family: Material-Design-Iconic-Font;
    -webkit-transform: translateZ(0);
    transform: translateZ(0); }
  .actions li a:hover {
    background: #d9bda3; }
    .actions li a:hover:before {
      -webkit-animation-name: hvr-icon-wobble-horizontal;
      animation-name: hvr-icon-wobble-horizontal;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-timing-function: ease-in-out;
      animation-timing-function: ease-in-out;
      -webkit-animation-iteration-count: 1;
      animation-iteration-count: 1; }
.actions li[aria-disabled="true"] a {
  display: none; }
.actions li:first-child a {
  background: #e6e6e6;
  padding-left: 48px; }
  .actions li:first-child a:before {
    content: '\f2ea';
    left: 26px; }
  .actions li:first-child a:hover {
    background: #ccc; }
.actions li:last-child a {
  padding-left: 29px;
  width: 167px;
  font-weight: 400; }
  .actions li:last-child a:before {
    right: 30px; }

.checkbox {
  position: relative; }
  .checkbox label {
    padding-left: 21px;
    cursor: pointer;
    color: #999; }
  .checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox input:checked ~ .checkmark:after {
    display: block; }

.checkmark {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  height: 12px;
  width: 13px;
  border-radius: 2px;
  background-color: #ebebeb;
  border: 1px solid #ccc;
  font-family: Material-Design-Iconic-Font;
  color: #000;
  font-size: 10px;
  font-weight: bolder; }
  .checkmark:after {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    content: '\f26b'; }

.checkbox-circle {
  margin-top: 41px;
  margin-bottom: 46px; }
  .checkbox-circle label {
    cursor: pointer;
    padding-left: 26px;
    color: #999;
    display: block;
    margin-bottom: 15px;
    position: relative; }
    .checkbox-circle label.active .tooltip {
      display: block; }
  .checkbox-circle input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox-circle input:checked ~ .checkmark:after {
    display: block; }
  .checkbox-circle .checkmark {
    position: absolute;
    top: 11px;
    left: 0;
    height: 14px;
    width: 14px;
    border-radius: 50%;
    background: #ebebeb;
    border: 1px solid #cdcdcd; }
    .checkbox-circle .checkmark:after {
      content: "";
      top: 6px;
      left: 6px;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #666666;
      position: absolute;
      display: none; }
  .checkbox-circle .tooltip {
    padding: 9px 22px;
    background: #f2f2f2;
    line-height: 1.8;
    position: relative;
    margin-top: 16px;
    margin-bottom: 28px;
    display: none; }
    .checkbox-circle .tooltip:before {
      content: "";
      border-bottom: 10px solid #f2f2f2;
      border-right: 9px solid transparent;
      border-left: 9px solid transparent;
      position: absolute;
      bottom: 100%; }

.product {
  margin-bottom: 33px; }

.item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 30px;
  border-bottom: 1px solid #e6e6e6;
  margin-bottom: 30px; }
  .item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border: none; }
  .item .left {
    display: flex;
    align-items: center; }
  .item .thumb {
    display: inline-flex;
    width: 100px;
    height: 90px;
    justify-content: center;
    align-items: center;
    border: 1px solid #f2f2f2; }
  .item .purchase {
    display: inline-block;
    margin-left: 21px; }
    .item .purchase h6 {
      font-family: "Poppins-Medium";
      font-size: 16px;
      margin-bottom: 4px;
      font-weight: 500; }
      .item .purchase h6 a {
        color: #333; }
  .item .price {
    font-size: 16px; }

.checkout {
  margin-bottom: 44px; }
  .checkout span.heading {
    font-family: "Poppins-Medium";
    font-weight: 500;
    margin-right: 5px; }
  .checkout .subtotal {
    margin-bottom: 18px; }
  .checkout .shipping {
    margin-bottom: 19px; }
    .checkout .shipping span.heading {
      margin-right: 4px; }
  .checkout .total-price {
    font-family: "Muli-Bold";
    color: #333;
    font-weight: 700; }

@-webkit-keyframes hvr-icon-wobble-horizontal {
  16.65% {
    -webkit-transform: translateX(6px);
    transform: translateX(6px); }
  33.3% {
    -webkit-transform: translateX(-5px);
    transform: translateX(-5px); }
  49.95% {
    -webkit-transform: translateX(4px);
    transform: translateX(4px); }
  66.6% {
    -webkit-transform: translateX(-2px);
    transform: translateX(-2px); }
  83.25% {
    -webkit-transform: translateX(1px);
    transform: translateX(1px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }
@keyframes hvr-icon-wobble-horizontal {
  16.65% {
    -webkit-transform: translateX(6px);
    transform: translateX(6px); }
  33.3% {
    -webkit-transform: translateX(-5px);
    transform: translateX(-5px); }
  49.95% {
    -webkit-transform: translateX(4px);
    transform: translateX(4px); }
  66.6% {
    -webkit-transform: translateX(-2px);
    transform: translateX(-2px); }
  83.25% {
    -webkit-transform: translateX(1px);
    transform: translateX(1px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }
@media (max-width: 1500px) {
  .wrapper {
    height: auto; } }
@media (max-width: 1199px) {
  .wrapper {
    height: 100vh; }

  #wizard {
    margin-right: 40px;
    min-height: 829px;
    padding-left: 60px;
    padding-right: 60px; } }
@media (max-width: 991px) {
  .wrapper {
    justify-content: center; }
    .wrapper .image-holder {
      display: none; }
    .wrapper form {
      width: 60%; }

  #wizard {
    margin-right: 0;
    padding-left: 40px;
    padding-right: 40px; } }
@media (max-width: 767px) {
  .wrapper {
    height: auto;
    display: block; }
    .wrapper .image-holder {
      width: 100%;
      display: block; }
    .wrapper form {
      width: 100%; }

  #wizard {
    min-height: unset;
    padding: 70px 20px 40px; }

  .form-row.form-group {
    display: block; }
    .form-row.form-group .form-holder {
      width: 100%;
      margin-right: 0;
      margin-bottom: 24px; }

  .item .purchase {
    margin-left: 11px; } }

/*# sourceMappingURL=style.css.map */
</style>