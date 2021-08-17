<?php

const ALL_DRAWINGS = 80;
const PENCIL_DRAWINGS = 40;
const MARKER_DRAWINGS = 23;

$red_drawings = ALL_DRAWINGS - PENCIL_DRAWINGS - MARKER_DRAWINGS;

echo $red_drawings . ' drawings are red';
