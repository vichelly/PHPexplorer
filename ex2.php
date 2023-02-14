<?php
echo '<h1>';
    for($lineCounter = 0; $lineCounter < 20; $lineCounter++) {
        for($hyphenCounter = 0; $hyphenCounter < $lineCounter; $hyphenCounter++) {
          echo '-';
        };
        echo '<br/>';
      }
echo '</h1>';