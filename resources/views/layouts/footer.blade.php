@vite(['resources/sass/footer.scss'])

<footer class="footer-block">
    <div class="content-wrapper footer">
        <div class="upper-part">
            <div class="quick-links">
                <h4>Quick links</h4>
                <a href="{{ url('/products') }}">Products</a>
                <a href="/smth">smth2</a>
                <a href="/smth">smth3</a>
            </div>
            <div class="info">
                <h4>Info</h4>
                <a href="/about">About</a>
                <a href="/contact-us">Contact us</a>
                <a href="/shipping-policy">Shipping policy</a>
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
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.99992 3.12165C12.403 3.12165 12.6877 3.1308 13.6367 3.1741C14.5142 3.21415 14.9907 3.36077 15.3079 3.48398C15.7279 3.64725 16.0278 3.84231 16.3427 4.15723C16.6576 4.47215 16.8527 4.772 17.0159 5.19206C17.1392 5.50923 17.2858 5.98577 17.3258 6.86323C17.3691 7.81228 17.3783 8.0969 17.3783 10.5C17.3783 12.9031 17.3691 13.1878 17.3258 14.1368C17.2858 15.0143 17.1392 15.4908 17.0159 15.808C16.8527 16.228 16.6576 16.5279 16.3427 16.8428C16.0278 17.1577 15.7279 17.3528 15.3079 17.516C14.9907 17.6393 14.5142 17.7859 13.6367 17.8259C12.6878 17.8692 12.4032 17.8784 9.99992 17.8784C7.59666 17.8784 7.31204 17.8692 6.36317 17.8259C5.48568 17.7859 5.00913 17.6393 4.692 17.516C4.2719 17.3528 3.97206 17.1577 3.65713 16.8428C3.34221 16.5279 3.14715 16.228 2.98392 15.808C2.86067 15.4908 2.71405 15.0143 2.674 14.1368C2.6307 13.1878 2.62156 12.9031 2.62156 10.5C2.62156 8.0969 2.6307 7.81228 2.674 6.86326C2.71405 5.98577 2.86067 5.50923 2.98392 5.19206C3.14715 4.772 3.34221 4.47215 3.65713 4.15723C3.97206 3.84231 4.2719 3.64725 4.692 3.48398C5.00913 3.36077 5.48568 3.21415 6.36313 3.1741C7.31218 3.1308 7.59681 3.12165 9.99992 3.12165ZM9.99992 1.5C7.55565 1.5 7.2492 1.51036 6.28925 1.55416C5.33127 1.59789 4.67706 1.75001 4.10456 1.97251C3.51273 2.20251 3.01082 2.51025 2.51049 3.01058C2.01015 3.51092 1.70241 4.01283 1.47241 4.60466C1.24991 5.17716 1.09779 5.83137 1.05406 6.78935C1.01026 7.74926 0.999939 8.05575 0.999939 10.5C0.999939 12.9443 1.01026 13.2508 1.05406 14.2107C1.09779 15.1687 1.24991 15.8229 1.47241 16.3954C1.70241 16.9872 2.01015 17.4891 2.51049 17.9895C3.01082 18.4898 3.51273 18.7975 4.10456 19.0275C4.67706 19.25 5.33127 19.4021 6.28925 19.4459C7.2492 19.4897 7.55565 19.5 9.99992 19.5C12.4442 19.5 12.7507 19.4897 13.7106 19.4459C14.6686 19.4021 15.3228 19.25 15.8953 19.0275C16.4871 18.7975 16.989 18.4898 17.4894 17.9895C17.9897 17.4891 18.2974 16.9872 18.5274 16.3954C18.7499 15.8229 18.9021 15.1687 18.9458 14.2107C18.9896 13.2508 18.9999 12.9443 18.9999 10.5C18.9999 8.05575 18.9896 7.74926 18.9458 6.78935C18.9021 5.83137 18.7499 5.17716 18.5274 4.60466C18.2974 4.01283 17.9897 3.51092 17.4894 3.01058C16.989 2.51025 16.4871 2.20251 15.8953 1.97251C15.3228 1.75001 14.6686 1.59789 13.7106 1.55416C12.7507 1.51036 12.4442 1.5 9.99992 1.5ZM9.99992 5.87838C7.44747 5.87838 5.37828 7.94757 5.37828 10.5C5.37828 13.0525 7.44747 15.1217 9.99992 15.1217C12.5524 15.1217 14.6216 13.0525 14.6216 10.5C14.6216 7.94757 12.5524 5.87838 9.99992 5.87838ZM9.99992 13.5C8.34308 13.5 6.9999 12.1569 6.9999 10.5C6.9999 8.84317 8.34308 7.5 9.99992 7.5C11.6568 7.5 12.9999 8.84317 12.9999 10.5C12.9999 12.1569 11.6568 13.5 9.99992 13.5ZM15.8841 5.69579C15.8841 6.29226 15.4006 6.77581 14.8042 6.77581C14.2077 6.77581 13.7241 6.29226 13.7241 5.69579C13.7241 5.09931 14.2077 4.6158 14.8042 4.6158C15.4006 4.6158 15.8841 5.09931 15.8841 5.69579Z"/>
                </svg>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.7892 7.19789C18.9297 8.1815 18.9999 9.15105 18.9999 10.1066V11.4555L18.7892 14.3642C18.6768 15.1792 18.4379 15.7693 18.0725 16.1347C17.6791 16.5281 17.0889 16.781 16.302 16.8934C15.5433 16.9496 14.6299 16.9918 13.562 17.0199C12.5222 17.048 11.665 17.0621 10.9906 17.0621H9.97886C6.85942 17.034 4.82195 16.9778 3.86645 16.8934C3.86645 16.8934 3.75404 16.8794 3.52921 16.8513C3.30439 16.8232 3.12172 16.7951 2.9812 16.767C2.84069 16.7389 2.65802 16.6686 2.43319 16.5562C2.23647 16.4438 2.0538 16.3033 1.88518 16.1347C1.74467 15.966 1.60415 15.7412 1.46364 15.4602C1.35123 15.1511 1.28097 14.8841 1.25287 14.6593L1.16856 14.3642C1.05615 13.3806 0.999939 12.411 0.999939 11.4555V10.1066L1.16856 7.19789C1.28097 6.3829 1.51985 5.79274 1.88518 5.4274C2.27863 5.00585 2.88284 4.75293 3.69783 4.66862C4.45661 4.61241 5.35591 4.57026 6.39572 4.54215C7.43554 4.51405 8.29268 4.5 8.96715 4.5H9.97886C12.5081 4.5 14.6159 4.55621 16.302 4.66862C17.0889 4.75293 17.6791 5.00585 18.0725 5.4274C18.185 5.53981 18.2833 5.68033 18.3676 5.84895C18.4519 5.98946 18.5222 6.14403 18.5784 6.31265C18.6346 6.45316 18.6768 6.59368 18.7049 6.73419C18.733 6.87471 18.7611 6.98712 18.7892 7.07143V7.19789ZM12.4238 10.9075L13.014 10.6124L8.16622 8.08314V13.1417L12.4238 10.9075Z"/>
                </svg>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1420_5644)">
                        <path d="M15.821 2.5495C14.4443 1.22789 12.5391 0.5 10.4564 0.5C7.275 0.5 5.31827 1.80411 4.23702 2.89806C2.90443 4.24623 2.14033 6.03635 2.14033 7.80948C2.14033 10.0358 3.07154 11.7445 4.63096 12.3802C4.73565 12.4231 4.841 12.4447 4.94428 12.4447C5.27327 12.4447 5.53393 12.2295 5.62425 11.8842C5.6769 11.6861 5.79886 11.1974 5.8519 10.9852C5.96542 10.5663 5.8737 10.3648 5.62612 10.073C5.17511 9.53933 4.96507 8.90827 4.96507 8.08698C4.96507 5.64748 6.78156 3.05481 10.1482 3.05481C12.8196 3.05481 14.479 4.5731 14.479 7.0171C14.479 8.55937 14.1468 9.98765 13.5434 11.039C13.1241 11.7696 12.3868 12.6404 11.2549 12.6404C10.7654 12.6404 10.3258 12.4393 10.0483 12.0888C9.78626 11.7574 9.69985 11.3294 9.80528 10.8832C9.92434 10.3792 10.0867 9.8534 10.2439 9.34511C10.5305 8.41675 10.8014 7.53991 10.8014 6.84034C10.8014 5.64377 10.0658 4.83974 8.97106 4.83974C7.5798 4.83974 6.48984 6.2528 6.48984 8.05671C6.48984 8.9414 6.72496 9.60312 6.8314 9.85719C6.65613 10.5998 5.61448 15.0146 5.4169 15.8471C5.30264 16.3331 4.61444 20.1716 5.75354 20.4776C7.03339 20.8215 8.17742 17.0831 8.29387 16.6607C8.38824 16.3171 8.71844 15.018 8.92078 14.2195C9.53864 14.8146 10.5334 15.2169 11.5014 15.2169C13.3262 15.2169 14.9673 14.3958 16.1225 12.9049C17.2427 11.4588 17.8597 9.4432 17.8597 7.22975C17.8596 5.49936 17.1165 3.79341 15.821 2.5495Z"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1420_5644">
                            <rect width="20" height="20" fill="white" transform="translate(-6.10352e-05 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2364 1.5C13.5334 4.05445 14.9588 5.5774 17.4372 5.73942V8.61251C16.001 8.75292 14.7429 8.28307 13.2796 7.39739V12.7709C13.2796 19.5972 5.83902 21.7304 2.84768 16.8375C0.925441 13.689 2.10254 8.16426 8.26881 7.94284V10.9725C7.79905 11.0481 7.2969 11.167 6.83794 11.3236C5.46645 11.788 4.68892 12.6575 4.9049 14.1913C5.32067 17.1292 10.7094 17.9986 10.2612 12.2579V1.5054H13.2364V1.5Z"/>
                </svg>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.302 5.08314H14.0257C13.1545 5.08314 12.4098 5.39227 11.7915 6.01054C11.2013 6.62881 10.9063 7.37354 10.9063 8.24473V10.4789H9.09362V13.1768H10.9063V19.4578H13.6042V13.1768H16.302V10.4789H13.6042V8.66628C13.6042 8.44145 13.6885 8.24473 13.8571 8.07611C14.0257 7.87939 14.2365 7.78103 14.4894 7.78103H16.302V5.08314ZM0.999939 2.5C0.999939 1.94772 1.44765 1.5 1.99994 1.5H17.9999C18.5522 1.5 18.9999 1.94772 18.9999 2.5V18.4578C18.9999 19.0101 18.5522 19.4578 17.9999 19.4578H1.99994C1.44765 19.4578 0.999939 19.0101 0.999939 18.4578V2.5Z"/>
                </svg>
            </div>
        </div>
    </div>
</footer>