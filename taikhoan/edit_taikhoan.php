<div class="account_form register">
                        <h2>Cập nhật tài khoản</h2>
                        <form action="index.php?act=edit_taikhoan" method="post">
                            <p>
                                <label>Tên người dùng <span>*</span></label>
                                <input type="text" name="name"> 
                            </p>
                            <p>
                                <label>Địa chỉ <span>*</span></label>
                                <input type="text" name="address"> 
                            </p>
                            <p>
                                <label>email<span>*</span></label>
                                <input type="email" name="email">
                            </p>
                            <p>
                                <label>Têm đăng nhập<span>*</span></label>
                                <input type="text" name="user">
                            </p>
                            <p>
                                <label>Mật khẩu<span>*</span></label>
                                <input type="password" name="pass">
                            </p>
                            <div class="login_submit">
                            <input type="submit" value="Cập nhật" name="edit_taikhoan">
                             <input type="reset" value="Nhập lại">
                            </div>
                        </form>
                    </div>