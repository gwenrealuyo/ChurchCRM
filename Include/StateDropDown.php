<select name="State" class="form-control select2" id="state-input">
	<option value="">No Selection</option>
	<option value="" disabled>--------------------</option>
	<option value="NCR"<?php if ($sState == 'NCR') {
    echo ' selected';
} ?>>NCR (National Capital Region)</option>
	<option value="CAR"<?php if ($sState == 'CAR') {
    echo ' selected';
} ?>>CAR (Cordillera Administrative Region)</option>
	<option value="R1"<?php if ($sState == 'R1') {
    echo ' selected';
} ?>>Region 1: Ilocos Region</option>
	<option value="R2"<?php if ($sState == 'R2') {
    echo ' selected';
} ?>>Region 2: Cagayan Valley</option>
	<option value="R3"<?php if ($sState == 'R3') {
    echo ' selected';
} ?>>Region 3: Central Luzon</option>
	<option value="R4A"<?php if ($sState == 'R4A') {
    echo ' selected';
} ?>>Region 4A: Calabarzon</option>
	<option value="R4B"<?php if ($sState == 'R4B') {
    echo ' selected';
} ?>>Region 4B: MIMAROPA / Southwestern Tagalog</option>
	<option value="R5"<?php if ($sState == 'R5') {
    echo ' selected';
} ?>>Region 5: Bicol Region</option>
	<option value="R6"<?php if ($sState == 'R6') {
    echo ' selected';
} ?>>Region 6: Western Visayas</option>
	<option value="R7"<?php if ($sState == 'R7') {
    echo ' selected';
} ?>>Region 7: Central Visayas</option>
	<option value="R8"<?php if ($sState == 'R8') {
    echo ' selected';
} ?>>Region 8: Eastern Visayas</option>
	<option value="R9"<?php if ($sState == 'R9') {
    echo ' selected';
} ?>>Region 9: Zamboanga Peninsula</option>
	<option value="R10"<?php if ($sState == 'R10') {
    echo ' selected';
} ?>>Region 10: Northern Mindanao</option>
	<option value="R11"<?php if ($sState == 'R11') {
    echo ' selected';
} ?>>Region 11: Davao Region</option>
	<option value="R12"<?php if ($sState == 'R12') {
    echo ' selected';
} ?>>Region 12: Soccskargen</option>
	<option value="R13"<?php if ($sState == 'R13') {
    echo ' selected';
} ?>>Region 13: Caraga Region</option>
	<option value="BARMM"<?php if ($sState == 'BARMM') {
    echo ' selected';
} ?>>Barmm: Bangsamoro Autonomous Region in Muslim Mindanao</option>
	
</select>
