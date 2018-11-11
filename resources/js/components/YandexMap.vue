<template>
    <div class="map row">
        <div class="col-8">
            <yandex-map :coords="[54.62896654088406, 39.731893822753904]" zoom="10" style="width: 100%; height: 420px; margin-top: 30px;"
                :cluster-options="{
            1: {clusterDisableClickZoom: true}
        }">



                <ymap-marker marker-id="3" marker-type="Placemark" :coords="[54.62896654088406, 39.731893822753904]" :icon="{
                layout: 'default#image',
                imageHref: 'https://developer.donorsearch.org/dropplet.svg',
                imageSize: [30, 40],
                imageOffset: [-15, -35]
            }"
                    circle-radius="1600" hint-content="Hint content 1" :balloonTemplate="balloonTemplate"></ymap-marker>
                <ymap-marker marker-id="1" marker-type="Placemark" :coords="[52.62896654088406, 39.731893822753904]"
                    circle-radius="1600" hint-content="Hint content 1" :icon="{
                layout: 'default#image',
                imageHref: 'https://developer.donorsearch.org/dropplet.svg',
                imageSize: [30, 40],
                imageOffset: [-15, -35]
            }"
                    :balloonTemplate="balloonTemplate1"></ymap-marker>

            </yandex-map>
        </div>
        <div class="col-4">

        </div>
    </div>
</template>
