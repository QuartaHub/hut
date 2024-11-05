<div class="catalog__sort sort">
    <? if ($_GET["sort"] == "price") {
        $arParams["ELEMENT_SORT_FIELD"] = "catalog_PRICE_1";
    }
    if ($_GET["sort"] == "new") {
        $arParams["ELEMENT_SORT_FIELD"] = "property_IS_NEW";
    }
    if ($_GET["order"] == "up") $arParams["ELEMENT_SORT_ORDER"] = "asc";
    if ($_GET["order"] == "down") $arParams["ELEMENT_SORT_ORDER"] = "desc";

    $baseLink = htmlspecialcharsbx(DeleteParam(['sort', 'order']));
    if ($baseLink != '') {
        $baseLink = '?' . $baseLink . '&';
    } else {
        $baseLink = '?';
    }
    ?>

    <div class="sort__select">
        <div class="sort__select-header">
            <button type="button" class="button sort-toggler">
                <span>По популярности</span>
                <?= buildSVG('sort', SITE_TEMPLATE_PATH . ICON_PATH) ?>
            </button>
        </div>
        <div id="sortModal" class="sort__select-dropdown">
            <div class="sort__title">Сортировка</div>
            <div class="sort__content">
                <span data-href="<?= GetPagePath(false, false) . $baseLink . 'sort=default' ?>" onclick="location.href=this.dataset.href"
                    class="<? if ($_GET['sort'] == 'default' || !isset($_GET['sort'])) {
                                echo 'selected';
                            } ?>">По популярности</span>
                <span data-href="<?= GetPagePath(false, false) . $baseLink . 'sort=price&order=up' ?>" onclick="location.href=this.dataset.href"
                    class="<? if ($_GET['sort'] == 'price' && $_GET['order'] == 'up') {
                                echo 'selected';
                            } ?>">Сначала дешевле</span>
                <span data-href="<?= GetPagePath(false, false) . $baseLink . 'sort=price&order=down' ?>" onclick="location.href=this.dataset.href"
                    class="<? if ($_GET['sort'] == 'price' && $_GET['order'] == 'down') {
                                echo 'selected';
                            } ?>">Сначала дороже</span>
                <span data-href="<?= GetPagePath(false, false) . $baseLink . 'sort=new&order=down' ?>" onclick="location.href=this.dataset.href"
                    class="<? if ($_GET['sort'] == 'new') {
                                echo 'selected';
                            } ?>">
                    По новизне
                </span>
            </div>
        </div>
    </div>
</div>