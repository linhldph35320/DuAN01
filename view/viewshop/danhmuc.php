<div class="col-lg-3 col-md-12">
    <!--sidebar widget start-->
    <aside class="sidebar_widget">
        <div class="widget_inner">
            <div class="widget_list widget_categories">
                <h2>Danh mục</h2>
                <ul>
                    <?php
                        foreach ($listdm as $dm) {
                            extract($dm);
                            $viewspdm = "index.php?act=viewspdm&id=" . $id;
                            echo '<li><a href="'.$viewspdm.'">'.$tendanhmuc.'</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </aside>
    <!--sidebar widget end-->
</div>