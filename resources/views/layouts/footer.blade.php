@vite(['resources/sass/footer.scss'])

<footer class="footer-block">
    <div class="content-wrapper footer">
        <div class="upper-part">
            <div class="quick-links">
                <h4>Quick links</h4>
                <a href="/smth" class="grey-text">smth1</a>
                <a href="/smth" class="grey-text">smth2</a>
                <a href="/smth" class="grey-text">smth3</a>
            </div>
            <div class="info">
                <h4>Info</h4>
                <a href="/about" class="grey-text">About</a>
                <a href="/contact-us" class="grey-text">Contact us</a>
                <a href="/shipping-policy" class="grey-text">Shipping policy</a>
            </div>
            <a class="logo" href="{{ url('/') }}">MoonWalkers</a>

        </div>
        <div class="contact-part">
            <div class="subscribe-form-wrapper">
                <label for="user-email-input">Subscribe to our emails</label>
                <form action="" method="post" class="subscribe">
                    <input id="user-email-input" type="email" name="user_email" placeholder="Email">
                    <button type="submit">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.537 5.80958C11.5684 5.73335 11.6182 5.66606 11.6819 5.61371C11.7455 5.56137 11.8212 5.52558 11.9021 5.50955C11.9829 5.49351 12.0665 5.49772 12.1454 5.52181C12.2242 5.54589 12.2959 5.58909 12.354 5.64758L16.354 9.64758C16.4006 9.69402 16.4375 9.7492 16.4627 9.80994C16.4879 9.87069 16.5009 9.93581 16.5009 10.0016C16.5009 10.0673 16.4879 10.1325 16.4627 10.1932C16.4375 10.254 16.4006 10.3091 16.354 10.3556L12.354 14.3556C12.2601 14.4495 12.1328 14.5022 12 14.5022C11.8672 14.5022 11.7399 14.4495 11.646 14.3556C11.5521 14.2617 11.4994 14.1344 11.4994 14.0016C11.4994 13.8688 11.5521 13.7415 11.646 13.6476L14.793 10.5016H4C3.86739 10.5016 3.74021 10.4489 3.64645 10.3551C3.55268 10.2614 3.5 10.1342 3.5 10.0016C3.5 9.86897 3.55268 9.74179 3.64645 9.64802C3.74021 9.55426 3.86739 9.50158 4 9.50158H14.793L11.646 6.35558C11.5757 6.28563 11.5279 6.19637 11.5085 6.09915C11.4891 6.00193 11.499 5.90114 11.537 5.80958Z" fill="#333030"/>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="social-media-icon-wrapper">
                <p>Oo</p>
                <p>OoO</p>
                <p>oO</p>
                <p>OO</p>
                <p>oOo</p>
            </div>
        </div>
    </div>
</footer>