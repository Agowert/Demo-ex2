<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>





<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

    $IMG = isset($arItem["PREVIEW_PICTURE"]["SRC"]) ? $arItem["PREVIEW_PICTURE"]["SRC"] : SITE_TEMPLATE_PATH."/img/rew/no_photo.jpg";

?>

<?php echo  '<pre>';
//print_r($arItem);
echo '</pre>'; ?>

    <div class="review-block">
        <div class="review-text">

            <div class="review-block-title"><span class="review-block-name">
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                       <?echo $arItem["NAME"]?>
                    </a>
                </span>
                <span class="review-block-description"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
                    <?echo $arItem["PROPERTIES"]["POSITION"]["VALUE"]?>
                    <?echo $arItem["PROPERTIES"]["COMPANY"]["VALUE"]?></span>
            </div>

            <div class="review-text-cont">
                <?echo $arItem["PREVIEW_TEXT"]?>
            </div>
        </div>
        <div class="review-img-wrap">
            <a href="#">
                <img src="<?=$IMG?>" alt="img">
            </a>
        </div>
    </div>


<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

