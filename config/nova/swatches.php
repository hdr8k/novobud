<?php

return [
    /**
     * Props to pass to the vue-swatches component.
     *
     * See https://saintplay.github.io/vue-swatches/#sub-props
     */
    'props' => [
        //        'colors' => 'material-basic', // Preset
        // 'colors' => 'material-basic', // Preset
        'colors' => [
            '#1FBC9C',
            '#1CA085',
            '#2ECC70',
            '#27AF60',
            '#27AF60',
            '#3398DB',
            '#2980B9',
            '#A463BF',
            '#2980B9',
            '#A463BF',
            '#8E43AD',
            '#3D556E',
            '#222F3D',
            '#F2C511',
            '#F39C19',
            '#E84B3C',
            '#C0382B',
            '#DDE6E8',
            '#BDC3C8',
            '',
        ], // Array

        'show-fallback'       => true,
        'fallback-input-type' => 'color', // Or "color"
        "popover-x"           => "left",
    ],
];
