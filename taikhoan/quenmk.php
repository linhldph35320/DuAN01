<div class="account_form register">
                        <div class="account_form register">
                        <h2>Quên mật khẩu</h2>
                        <form action="index.php?act=quenmk" method="post">
                           
                            <p>
                                <label>email<span>*</span></label>
                                <input type="email" name="email">
                            </p>
                           
                            <div class="login_submit">
                            <input type="submit" value="Cập nhật" name="guiemail">
                             <input type="reset" value="Nhập lại">
                            </div>
                        </form>
                        <h2 class="thongbao">
                    <?php
                    if (isset($quenMk) && ($quenMk != "")) {
                        echo $quenMk;
                    }
                    ?>
                </h2>
                </div>
                        