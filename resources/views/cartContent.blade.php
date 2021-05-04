<div class="container">

    <div class="order_column">
        <form action="#">
            <h2>Оформлення замовлення</h2>

            <div class="order">
                <div class="order_user_info">
                    <input type="text" class="textblock" placeholder="Ім’я">
                    <input type="text" class="textblock" placeholder="Прізвище">
                    <input type="text" class="textblock" placeholder="Адреса">
                    <div class="payment_label">
                        <p>Спосіб оплати</p>

                        <div class="payments">
                            <div class="payment">
                                <input type="radio" id="cardPayment" checked class="defRadio" name="payment" value="card">
                                <label for="cardPayment">Оплата кур'єру банківською картою</label>
                            </div>
                            <div class="payment">
                                <input type="radio" id="onlinePayment" class="defRadio" name="payment" value="online">
                                <label for="onlinePayment">Оплата онлайн</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user_cart">
                    <p id="users_order">Ваше замовлення:</p>



                    <p id="total">Всього: 555 грн</p>
                </div>
            </div>

            <div class="btn">
                <input type="submit" class="submit_btn" value="Оформити замовлення">
            </div>

        </form>

    </div>

</div>
