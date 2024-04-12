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

    ?>


    <div class="side-block side-opin" ">
        <div class="inner-block">
            <div class="title">
                <div class="photo-block">
                    <img height="48" width="48"  src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"]?>">
                </div>
                <div class="name-block"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"> <?echo $arItem["NAME"]?></a></div>
                <div class="pos-block"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
                    <?echo $arItem["PROPERTIES"]["POSITION"]["VALUE"]?>
                    <?echo $arItem["PROPERTIES"]["COMPANY"]["VALUE"]?></div>
            </div>
            <div class="text-block"><?echo $arItem["PREVIEW_TEXT"]?></div>
        </div>
    </div>


<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

