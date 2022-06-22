
plugin.tx_rswnrwcarousel_carousel {
  view {
    templateRootPaths.0 = EXT:rswnrw_carousel/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_rswnrwcarousel_carousel.view.templateRootPath}
    partialRootPaths.0 = EXT:rswnrw_carousel/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_rswnrwcarousel_carousel.view.partialRootPath}
    layoutRootPaths.0 = EXT:rswnrw_carousel/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_rswnrwcarousel_carousel.view.layoutRootPath}
  }
  #persistence {
  #  storagePid = {$plugin.tx_rswnrwcarousel_carousel.persistence.storagePid}
  #  #recursive = 1
  #}
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_rswnrwcarousel._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-rswnrw-carousel table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-rswnrw-carousel table th {
        font-weight:bold;
    }

    .tx-rswnrw-carousel table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

tt_content {
   homepage_carousel < lib.contentElement
   homepage_carousel {
      templateName = Carousel.html
      templateRootPaths.10 = EXT:rswnrw_carousel/Resources/Private/Templates/Carousel/
      dataProcessing {
         1 = Afm\RswnrwCarousel\DataProcessing\CarouselProcessor
      }
   }
}

