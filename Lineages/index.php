<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <?php include "../scripts/header.html"; ?>
    <h6>Lineages</h6>
    <p><b>Requirement</b>: R60+</p>
    <p>At R60 you will unlock Lineages, which give powerful upgrades based on your chosen Bloodline in the form of perks, and will even allow you to use the spell of other Factions, provided you complete the respective lineage challenge.</p>
    <p><b>Note</b>: You can not use a Lineage if it matches your faction or its respective prestige faction.</p>
    <p>Your Lineage is dependant on the Bloodline you chose.</p>
    <p>Lineages need 400 Royal Exchanges of the respective Faction plus their Bloodline to be used. (Needs to be bought Every Abdication)</p>
    <p><b>Note</b>: Levels only need to be bought once.</p>
    <p><b>Note</b>: You must have a prestige faction to buy a lineage (unless in R100-R115)</p>
    <p><b>Note</b>: (R116+) When using their lineage, Advanced Heritage powers are multiplied by the level of the lineage.</p>
    <p><b>Formula</b>: (1 + 0.3 * level)</p>
    <div class="shlisting">
        <div class="shelementwhole" style="padding-left: 20px">
            <h6 onclick="shohid($(this));"><b><a href="#" onclick="return false;"><font color="black">Lineage Level Cost</font></a></b></h6>
            <div class="autohide">
                <p>The base costs for lineages are 2.5 B (2.5e9) Faction Coins and each level costs 10 times more. The Ancient Heirloom reduces the cost of lineages that aren't at the maximum level by raising them to the 0.9th power, making the cost multiplier 10 ^ 0.9 or 7.943 instead.</p>
                <p><b>Lineage Cost Formula</b>: 25 * 10 ^ (8 + L + (0.5 * max(0 ; L - 31)) + (0.5 * max(0 ; L - 61)) + (0.5 * max(0 ; L - 91)) + (0.5 * max(0 ; L - 121))) where L is next lineage level.</p>
                <p><b>Lineage Cost Formula Simplified</b>
                <p>L1-31: 25 * 10 ^ (8 + L)</p>
                <p>L32-61: 25 * 10 ^ (39 + 1.5 * (L - 31))</p>
                <p>L62-91: 25 * 10 ^ (84 + 2 * (L - 61))</p>
                <p>L92-121: 25 * 10 ^ (144 + 2.5 * (L - 91))</p>
                <p>L122-151: 25 * 10 ^ (219 + 3 * (L - 121))</p>
                <br/>
                <p><img src="http://musicfamily.org/realm/Factions/picks/AncientHeirloomTrophy.png" alt="Ancient Heirloom" align="middle"><b> Ancient Heirloom</b> (Lore Artifact)</p>
                <p><b>Requirements</b>: Have at least 1 Lineage level purchased.</p>
                <p><b>Chance</b>: Total Lineage levels/20</p>
                <p><b>Effect</b>: Reduces the cost of Lineages(Except for the highest one).</p>
                <p><b>Cost</b>: 10 Dtg (1e100)</p>
                <p><b>Formula</b>: Lineage Level Cost ^ 0.9</p>
                <p><b>Note</b>: The cost listed below is <b>Without</b> Ancient Heirloom</p>
                <p><b>Level 1</b>: 2.5 B (2.5e9)</p>
                <p><b>Level 2</b>: 25 B (2.5e10)</p>
                <p><b>Level 3</b>: 250 B (2.5e11)</p>
                <p><b>Level 4</b>: 2.5 T (2.5e12)</p>
                <p><b>Level 5</b>: 25 T (2.5e13)</p>
                <p><b>Level 6</b>: 250 T (2.5e14)</p>
                <p><b>Level 7</b>: 2.5 Qa (2.5e15)</p>
                <p><b>Level 8</b>: 25 Qa (2.5e16)</p>
                <p><b>Level 9</b>: 250 Qa (2.5e17)</p>
                <p><b>Level 10</b>: 2.5 Qi (2.5e18)</p>
                <p><b>Level 11</b>: 25 Qi (2.5e19)</p>
                <p><b>Level 12</b>: 250 Qi (2.5e20)</p>
                <p><b>Level 13</b>: 2.5 Sx (2.5e21)</p>
                <p><b>Level 14</b>: 25 Sx (2.5e22)</p>
                <p><b>Level 15</b>: 250 Sx (2.5e23)</p>
                <p><b>Level 16</b>: 2.5 Sp (2.5e24)</p>
                <p><b>Level 17</b>: 25 Sp (2.5e25)</p>
                <p><b>Level 18</b>: 250 Sp (2.5e26)</p>
                <p><b>Level 19</b>: 2.5 Oc (2.5e27)</p>
                <p><b>Level 20</b>: 25 Oc (2.5e28)</p>
            </div>
        </div>
    </div>
    <div id="LineageCalculator" class="calc">
        <table>
            <tr>
                <th style="width : 72px"> Lineage level
                <th style="width : 75px"> Heirloom Active
                <th style="width : 75px"> Hourglass Active
                <th class="HourglassRelated"> Reincarnation
                <th> Cost for next Lineage level
            </tr>
            <tr>
                <td ><input id="LineageLevel" type="number" min="0" max="151" value="0"></td>
                <td ><input id="Heirloom" type="checkbox"></td>
                <td ><input id="Hourglass" type="checkbox"></td>
                <td class="HourglassRelated"><input id="HourglassR" type="number" min="100" max="220" value="100"></td>
                <td id = "LineageNextLevel"></td>
            </tr>
        </table>
        <script>
            function ShowAndHide() {
              $('.HourglassRelated').css('display', 'none');
              if($('#Hourglass').is(':checked')) {
                $('.HourglassRelated').css('display', 'table-cell');
              }
            }
            function LineageExponent(lineageLevel) {
              var costExponent = 0;
              var counter = 1;
              var diff;
              while(lineageLevel > 0) {
                diff = Math.min(30,lineageLevel);
                lineageLevel -= diff;
                costExponent += counter * diff;
                counter+= 0.5;
              }
              return costExponent;
            }
            function calcCost() {
              var lin = LineageExponent(parseInt($('#LineageLevel').val()));
              var heirloom = $('#Heirloom').is(':checked');
              var hourglass = $('#Hourglass').is(':checked')?0.01 * parseInt($('#HourglassR').val()):0;
              lin = 25 * 10 ** (8 + lin - hourglass);
              lin = lin**(1 - 0.1 * heirloom);
              return lin;
            }
            function calcNextLineageCost() {
              ShowAndHide();
              var cost = calcCost();
              cost = Math.floor(cost).toPrecision(4).replace(/0+e/,"e");
              $('#LineageNextLevel').text(cost);
            }
            calcNextLineageCost();
            $('#LineageLevel, #HourglassR').on('input', calcNextLineageCost);
            $('#Heirloom, #Hourglass').on('change', calcNextLineageCost);
        </script>
    </div>
    <p>You can get Lineage for each Faction (12 in Total, 15 in R130+)</p>
    <p>You get 3 perks and a Faction Coin boost plus Champion trophy after reaching level 20.</p>
    <p><b>Level 5</b>: Perk 1</p>
    <p><b>Level 10</b>: Specific FC boost</p>
    <p><b>Level 15</b>: Perk 2 - Unlocks Faction spell. (adjusted for your alignment if necessary)</p>
    <p><b>Note</b>: Level 15 Lineage Challenge does not need it's Lineage to complete.</p>
    <p><b>Level 20</b>: Perk 3 plus Grand Champion trophy</p>
    <p><b>Level 30 (R105+)</b>: Faction Spell boost</p>
    <p><b>Level 45 (R105+)</b>: Faction specific boost</p>
    <br/>
    <center><b>Lineage Menu</b></center>
    <center><img src="http://musicfamily.org/realm/Factions/picks/Lineages.png" usemap="#Lineages-map"></center>
    <map name="Lineages-map">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/FairyLineage.png align=middle> Fairy Lineage</b><p><b>Base Effect</b>: Makes Farms, Inns and Blacksmiths count 18% more per Lineage level.<p><b>Cost</b>: 400 Fairy Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="17,14,68,69" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/ElvenLineage.png align=middle> Elven Lineage</b><p><b>Base Effect</b>: Gives 1 autoclick per Lineage level. Also increases clicks count by 5000% per level.<p><b>Cost</b>: 400 Elven Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="77,14,131,67" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/AngelLineage.png align=middle> Angel Lineage</b><p><b>Base Effect</b>: Adds 7% mana regeneration per level.<p><b>Cost</b>: 400 Angel Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="137,16,188,67" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/GoblinLineage.png align=middle> Goblin Lineage</b><p><b>Base Effect</b>: Increase Tax Collection worth in seconds by 25 for every level.<p><b>Cost</b>: 400 Goblin Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="17,76,68,125" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/UndeadLineage.png align=middle> Undead Lineage</b><p><b>Base Effect</b>: +1% more Assistants per level.<p><b>Cost</b>: 400 Undead Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="77,75,130,127" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/DemonLineage.png align=middle> Demon Lineage</b><p><b>Base Effect</b>: Increase Non-Unique Buildings production based on Lineage level. Does not suffer from Ascension penalties.</p><p><b>Formula</b>: (100 * x ^ 2), where x is Lineage level.</p><p><b>Cost</b>: 400 Demon Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="137,73,191,127" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/TitanLineage.png align=middle> Titan Lineage</b><p><b>Base Effect</b>: Increase Royal Exchange bonus by 200% for every level.<p><b>Cost</b>: 400 Angel and 400 Goblin Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="17,135,68,187" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/DruidLineage.png align=middle> Druid Lineage</b><p><b>Base Effect</b>: Each lineage level counts as 2 additional Reincarnations.<p><b>Cost</b>: 400 Elven and 400 Demon Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="77,133,130,187" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/FacelessLineage.png align=middle> Faceless Lineage</b><p><b>Base Effect</b>:  Increase the duration of all spells based on lineage level<p>Formula: (x ^ 2.25)%, where x is lineage level.<p><b>Cost</b>: 400 Fairy and 400 Undead Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="137,134,190,187" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/DwarfLineage.png align=middle> Dwarf Lineage</b><p><b>Base Effect</b>: Increase the base production of each building based on their tier (additively). The bonus is multiplied by the Lineage level.</p><p><b>Formula</b>: (L * 10 ^ (0.2 * T  ^ 1.4)), where L is Lineage level and T is Building tier.</p><p><b>Cost</b>: 400 Dwarf Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="17,193,70,246" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/DrowLineage.png align=middle> Drow Lineage</b><p><b>Base Effect</b>: Increase offline production bonus based on Lineage level.</p><p><b>Formula</b>: (150 * L ^ 2.25), where x is Lineage level.</p><p>A-nerfed, but ascension penalties are removed over time.<p>Formula: (floor(ln(1 + (3 * x) / 86400 ) / ln(3))) , x is seconds (This Reincarnation)<p><b>Cost</b>: 400 Drow Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="77,193,128,247" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/DragonLineage.png align=middle> Dragon Lineage</b><p><b>Base Effect</b>: Unique Buildings count as 12% more per level for all purposes.<p><b>Cost</b>: 400 Dwarf and 400 Drow Royal Exchanges.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at." coords="137,193,190,246" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/ArchonLineage.png align=middle> Archon Lineage</p></b> <p><b>Requirements</b>: R130+</p> <p><b>Cost</b>: 400 Angel, Undead Royal Exchanges</p> <p><b>Effect</b>: Increase Faction Coin find chance multiplicatively by 25% per level.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at.</p>" coords="18,257,68,305" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/DjinnLineage.png align=middle> Djinn Lineage</p></b> <p><b>Requirements</b>: R130+</p> <p><b>Cost</b>: 400 Fairy, Demon Royal Exchanges</p> <p><b>Effect</b>: Increase production bonus from gems by a multiplicative 8% for every level.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at.</p>" coords="78,255,128,306" shape="rect">
        <area target="" research="<p><b><img src=http://musicfamily.org/realm/Factions/picks/MakersLineage.png align=middle> Makers Lineage</p></b> <p><b>Requirements</b>: R130+</p> <p><b>Cost</b>: 400 Elven, Goblin Royal Exchanges</p> <p><b>Effect</b>: Increase Royal Exchange bonus by multiplicative 8% per level.<p>Lineages needs bought every Abdication and Reincarnation and Levels only need bought once.<p>Pointing to this ingame will tell you what level it is at.</p>" coords="136,255,190,305" shape="rect">
    </map>
    <hr>
    <H6>Fairy</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyLineage.png" align="middle"><b> Fairy Lineage</b></p>
    <p><b>Cost</b>: 400 Fairy Royal Exchanges.</p>
    <p><b>Effect</b>: Makes Farms, Inns and Blacksmiths count 18% more per Lineage level.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk1.png" align="middle"><b> Fairy Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Makes Fairy Bloodline affect Hall of Legends.</p>
    <p><b>Effect</b>: Also reduces Fairy Bloodline Post Ascension nerf.</p>
    <p><b>Formula</b>: (250 * (a ^ 0.9)), A1 nerf removed</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x100 Fairy Faction Coins find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk2.png" align="middle"><b> Fairy Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Fairy Lineage Challenge.</p>
    <p><b>Challenge</b>: 2k Assistants in less than 10 minutes.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Fairy Chanting)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk3.png" align="middle"><b> Fairy Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Gain 1% more assistants for every 2000 Unique Buildings.</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyGrandChampionTrophy.png" align="middle"> Fairy Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Fairy Lineage to level 20 and purchase 3 Fairy Lineage perks.</p>
    <br/>
    <p><b>Level 30</b>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk4.png" align="middle"><b> Fairy Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: While Fairy Chanting is active, further increase your temporary assistants based on its duration.</p>
    <p><b>Formula</b>: (2.5 * (x * 30) ^ 0.5), where x is Fairy Chanting duration in seconds.</p>
    <br/>
    <p><b>Level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FairyPerk5.png" align="middle"> Fairy Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Assistants count 300% more.</p>
    <hr>
    <H6>Elven</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenLineage.png" align="middle"><b> Elven Lineage</b></p>
    <p><b>Cost</b>: 400 Elven Royal Exchanges.</p>
    <p><b>Effect</b>: Gives 1 autoclick per Lineage level.</p>
    <p><b>Effect</b>: Also increases clicks count by 5000% per level.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk1.png" align="middle"><b> Elven Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Increase autoclicks provided by Elven Bloodlines to 9 per second and their multiplier to x10000.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x100 Elven Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk2.png" align="middle"><b> Elven Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Elven Lineage Challenge.</p>
    <p><b>Challenge</b>: 7777 autoclicks in the first 5 minutes of a run.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Moon Blessing)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk3.png" align="middle"><b> Elven Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Increase base clicking reward by 15% of Unique Building production for every 777 of them.</p>
    <p><b>Formula</b>: (15 * floor(x / 777))</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenGrandChampionTrophy.png" align="middle"> Elven Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Elven Lineage to level 20 and purchase 3 Elven Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk4.png" align="middle"><b> Elven Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: When Moon Blessing is active, multiply your fc chance by 1500%.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ElvenPerk5.png" align="middle"> Elven Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Faction Coins count 1000% more.</p>
    <hr>
    <H6>Angel</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelLineage.png" align="middle"><b> Angel Lineage</b></p>
    <p><b>Cost</b>: 400 Angel Royal Exchanges.</p>
    <p><b>Effect</b>: Adds 7% mana regeneration per level.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk1.png" align="middle"><b> Angel Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Angel Bloodline effect now counts total spells cast this R.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x100 Angel Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk2.png" align="middle"><b> Angel Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Angel Lineage Challenge.</p>
    <p><b>Challenge</b>: Play 2 hours straight with at least 1 spell active.</p>
    <p><b>Note</b>: This must be done within first 2 hours and 1 minute since start of run.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (God's Hand)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk3.png" align="middle"><b> Angel Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20</p>
    <p><b>Effect</b>: Increase God's Hand bonus based on Unique Buildings owned.</p>
    <p><b>Formula</b>: (12000 * (x / 1000))%, Unique Buildings.(rounded down to nearest 1000)</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelGrandChampionTrophy.png" align="middle"> Angel Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Angel Lineage to level 20 and purchase 3 Angel Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk4.png" align="middle"><b> Angel Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: When God's Hand is active, increase max mana by 50%.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/AngelPerk5.png" align="middle"> Angel Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Spells cast count 1000% more.</p>
    <hr>
    <H6>Goblin</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinLineage.png" align="middle"><b> Goblin Lineage</b></p>
    <p><b>Cost</b>: 400 Goblin Royal Exchanges.</p>
    <p><b>Effect</b>: Increase Tax Collection worth in seconds by 25 for every level.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk1.png" align="middle"><b> Goblin Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: When using Goblin Bloodline, Tax Collections are worth more seconds based on the amount of assistants you own.</p>
    <p><b>Formula</b>: (0.75 * x ^ 0.25), where x is amount of assistants you own.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x100 Goblin Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk2.png" align="middle"><b> Goblin Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Goblin Lineage Challenge.</p>
    <p><b>Challenge</b>: Cast 1 million TCs in a single game.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Goblin's Greed)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk3.png" align="middle"><b> Goblin Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Unique Building's base production increased by 25% for every 650 Unique Buildings.</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinGrandChampionTrophy.png" align="middle"> Goblin Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Goblin Lineage to level 20 and purchase 3 Goblin Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk4.png" align="middle"><b> Goblin Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Goblin's Greed stops producing Faction Coins instantly. Instead, increase your Faction Coin find chance based on the Gems required for your next Reincarnation.</p>
    <p><b>Formula</b>: (20 + ln(1 + x) ^ 1.85), where x is Gems required for your next Reincarnation.</p>
    <p><b>Effect</b>: Also makes Tax Collection casts count 100% more.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/GoblinPerk5.png" align="middle"> Goblin Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Increase Faction Coin Find Chance by 1000%.</p>
    <hr>
    <H6>Undead</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadLineage.png" align="middle"><b> Undead Lineage</b></p>
    <p><b>Cost</b>: 400 Undead Royal Exchanges.</p>
    <p><b>Effect</b>: +1% more Assistants per level.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk1.png" align="middle"><b> Undead Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Undead Bloodline multiplies your assistants by 8% of the amount instead of adding them.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x100 Undead Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk2.png" align="middle"><b> Undead Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Undead Lineage Challenge.</p>
    <p><b>Challenge</b>: Have Night Time's spell duration be 60 seconds.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Night Time)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk3.png" align="middle"><b> Undead Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Gain 10 assistants for every 500 Unique Buildings.</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadGrandChampionTrophy.png" align="middle"> Undead Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Undead Lineage to level 20 and purchase 3 Undead Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk4.png" align="middle"><b> Undead Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Increase Offline Bonus based on Night Time activity time in this game.</p>
    <p><b>Formula</b>: (7 * x ^ 0.7), where x is Night Time activity time this game.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/UndeadPerk5.png" align="middle"> Undead Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Reincarnation Power Counts Reincarnations as 100% more.</p>
    <hr>
    <H6>Demon</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonLineage.png" align="middle"><b> Demon Lineage</b></p>
    <p><b>Cost</b>: 400 Demon Royal Exchanges.</p>
    <p><b>Effect</b>: Increase Non-Unique Buildings production based on Lineage level. Ascension penalty reduces based on time this Reincarnation.</p>
    <p><b>Production Formula</b>: (100 * x ^ 2), where x is Lineage level.</p>
    <p><b>Ascension Penalty Reduction Formula</b>: (floor(log3(x / 28800 + 1)), where x is time this reincarnation in seconds. (16 hours for -1, 2 days 16 hours for -2)</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk1.png" align="middle"><b> Demon Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: While using Demon Bloodline, increase Maximum Mana based on trophies unlocked.</p>
    <p><b>Formula</b>: (20 * x ^ 1.25), where x is trophies unlocked.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x100 Demon Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk2.png" align="middle"><b> Demon Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Demon Lineage Challenge.</p>
    <p><b>Challenge</b>: 5 days of HFB activity time (This R).</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Hellfire Blast)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk3.png" align="middle"><b> Demon Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Increase production bonus from Gems by 50% per 666 Unique Buildings (multiplicative)</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonGrandChampionTrophy.png" align="middle"> Demon Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Demon Lineage to level 20 and purchase 3 Demon Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk4.png" align="middle"><b> Demon Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Non-Unique Buildings are also targeted by Hellfire Blast.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DemonPerk5.png" align="middle"> Demon Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Trophies count 1000% more.</p>
    <hr>
    <H6>Titan</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanLineage.png" align="middle"><b> Titan Lineage</b></p>
    <p><b>Cost</b>: 400 Angel and 400 Goblin Royal Exchanges.</p>
    <br/>
    <p><b>Effect</b>: Increase Royal Exchange bonus by 200% for every level.</p>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk1.png" align="middle"><b> Titan Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Removes 1 Ascension penalty from Titan Bloodline.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x50 more Angel and Goblin Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk2.png" align="middle"><b> Titan Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Titan Lineage Challenge.</p>
    <p><b>Challenge</b>: 25K mana per second as pure Titan. (so no Dragon Trade Treaty)</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Lightning Strike)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk3.png" align="middle"><b> Titan Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Increase the base production of tier 4 and tier 7 buildings based on Unique Buildings owned.</p>
    <p><b>Formula</b>: (0.01 * x and y), where x is tier 4 and tier 7, y is Unique Buildings owned.</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanGrandChampionTrophy.png" align="middle"> Titan Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Titan Lineage to level 20 and purchase 3 Titan Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk4.png" align="middle"><b> Titan Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Lightning Strike always hits Unique Buildings in addition to its random target. Unique Buildings are no longer random targets.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/TitanPerk5.png" align="middle"> Titan Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Royal Exchanges count 500% more.</p>
    <hr>
    <H6>Druid</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidLineage.png" align="middle"><b> Druid Lineage</b></p>
    <p><b>Cost</b>: 400 Elven and 400 Demon Royal Exchanges.</p>
    <p><b>Effect</b>: Each lineage level counts as 2 additional Reincarnations.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk1.png" align="middle"><b> Druid Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Increases Non-Unique building production based on time spent in this game.</p>
    <p><b>Formula</b>: (0.25 * x ^ 1.25), where x is seconds this game.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x50 more Elven and Demon Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk2.png" align="middle"><b> Druid Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Druid Lineage Challenge.</p>
    <p><b>Challenge</b>: Have a mana regeneration of at least double your max mana.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Grand Balance)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk3.png" align="middle"><b> Druid Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Increase Grand Balance bonus based on the amount of Unique Buildings you own.</p>
    <p><b>Formula</b>: (12000 * (x / 1000)), where x is amount of Unique Buildings you own.</p>
    <p><b>Effect</b>: One ascension penalty is removed.</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidGrandChampionTrophy.png" align="middle"> Druid Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Druid Lineage to level 20 and purchase 3 Druid Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk4.png" align="middle"><b> Druid Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Grand Balance lasts longer based on the amount of assistants you own.</p>
    <p><b>Formula</b>: (2.25 * ln(1 + x) ^ 2.25), where x is amount of assistants you own.</p>
    <p><b>Effect</b>: Also, while Grand Balance is active, increase the production of its targets based on Grand Balance duration.</p>
    <p><b>Formula</b>: (3 * ln(1+x) ^ 3), where x is spell duration in seconds and y is amount of grand balance targets.</p>
    <p><b>Note</b>: Ascension 2 penalty is removed</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DruidPerk5.png" align="middle"> Druid Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Mana produced counts 1000% more.</p>
    <hr>
    <H6>Faceless</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessLineage.png" align="middle"><b> Faceless Lineage</b></p>
    <p><b>Cost</b>: 400 Fairy and 400 Undead Royal Exchanges.</p>
    <p><b>Effect</b>: Increase the duration of all spells based on lineage level</p>
    <p><b>Formula</b>: (x ^ 2.25)%, where x is lineage level.
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk1.png" align="middle"><b> Faceless Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Faceless Bloodline counts total mana produced (This R) and increases mana per second based on the amount of assistants you own.</p>
    <p><b>Formula</b>: (0.95 * x ^ 0.95), where x is assistants you own</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x50 more Fairy and Undead Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk2.png" align="middle"><b> Faceless Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Faceless Lineage Challenge.</p>
    <p><b>Challenge</b>: Cast 100 Brainwaves in a single game.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Brainwave)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk3.png" align="middle"><b> Faceless Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: 5% more assistant production per 1k Unique Buildings. (Does not suffer from Ascension penalties)</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessGrandChampionTrophy.png" align="middle"> Faceless Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Faceless Lineage to level 20 and purchase 3 Faceless Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk4.png" align="middle"><b> Faceless Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Remove 1 Ascension penalty from Brainwave on Unique Buildings.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/FacelessPerk5.png" align="middle"> Faceless Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Time passed counts 100% more.</p>
    <hr>
    <H6>Dwarf</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfLineage.png" align="middle"><b> Dwarf Lineage</b></p>
    <p><b>Cost</b>: 400 Dwarf Royal Exchanges.</p>
    <p><b>Effect</b>: Increase the base production of each building based on their tier (additively).</p>
    <p><b>Note</b>: The bonus is multiplied by the Lineage level.</p>
    <p><b>Formula</b>: (L * 10 ^ (0.2 * T  ^ 1.4)), where L is Lineage level and T is Building tier.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk1.png" align="middle"><b> Dwarf Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Dwarven Bloodline increases faction coin find chance based on total time spent as Good. (1 day of Good = 19,520%).
    <p><b>Formula</b>: (50 * x ^ 0.75) where x is seconds of good alignment (this R)</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x100 Dwarf Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk2.png" align="middle"><b> Dwarf Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Dwarf Lineage Challenge.</p>
    <p><b>Challenge</b>: Have 10k Excavations.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Diamond Pickaxe)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk3.png" align="middle"><b> Dwarf Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Excavations and Artifacts count 1% more for every 1500 Unique Buildings.</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfGrandChampionTrophy.png" align="middle"> Dwarf Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Dwarf Lineage to level 20 and purchase 3 Dwarf Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DwarfPerk4.png" align="middle"><b> Dwarf Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: When Diamond Pickaxe is active, increase mana regen based on Faction Coin chance.</p>
    <p><b>Formula</b>: (0 .5 * log10(x + 1) ^ 2.5), where x is Faction Coin chance.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DwarvenPerk5.png" align="middle"> Dwarf Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Buildings count 100% more.</p>
    <hr>
    <H6>Drow</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowLineage.png" align="middle"><b> Drow Lineage</b></p>
    <p><b>Cost</b>: 400 Drow Royal Exchanges.</p>
    <p><b>Effect</b>: Increase offline production bonus based on Lineage level.
    <p><b>Formula</b>: (150 * L ^ 2.25), where L is Lineage level.</p>
    <p><b>Note</b>: A-nerfed, but ascension penalties are removed over time.</p>
    <p><b>Formula</b>: (floor(ln(1 + (3 * x) / 86400 ) / ln(3))) , x is seconds (This Reincarnation).</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk1.png" align="middle"><b> Drow Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: While using Drow Bloodline, all time spent counts 100% more for all purposes.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x100 Drow Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk2.png" align="middle"><b> Drow Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Drow Lineage Challenge.</p>
    <p><b>Challenge</b>: 30 days offline across all Reincarnations.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Combo Strike)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk3.png" align="middle"><b> Drow Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Increase Faction Coin find chance by 5% per 3000 unique buildings.</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowGrandChampionTrophy.png" align="middle"> Drow Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Drow Lineage to level 20 and purchase 3 Drow Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk4.png" align="middle"><b> Drow Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Combo Strike's combo bonus increases by 5% per 30 seconds spent this game.</p>
    <p><b>Effect</b>: While Combo Strike is active, increase the production of all buildings based on the current Combo Strike bonus.</p>
    <p><b>Formula</b>: (2 * log10((x ^ 0.9) ^ T) ^ 2) where x is combo count, and T is spell tier.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DrowPerk5.png" align="middle"> Drow Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Maximum Mana counts 300% more.</p>
    <hr>
    <H6>Dragon</h6>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonLineage.png" align="middle"><b> Dragon Lineage</b></p>
    <p><b>Cost</b>: 400 Dwarf and 400 Drow Royal Exchanges.</p>
    <p><b>Effect</b>: Unique Buildings count as 12% more per level for all purposes.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk1.png" align="middle"><b> Dragon Perk 1</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Dragon Bloodline increases the production of Unique Buildings by 1.75% per building of the same type.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Effect</b>: x50 more Dwarf and Drow Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk2.png" align="middle"><b> Dragon Perk 2</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Dragon Lineage Challenge.</p>
    <p><b>Challenge</b>: 5 spells at Tier 5 in less than 10 minutes.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Dragons Breath)</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk3.png" alt="DragonPerk3" align="middle"><b> Dragon Perk 3</b></p>
    <p><b>Requirement</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Maximum mana increased by 1.25 for every 2 Unique Buildings.</p>
    <br/>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonGrandChampionTrophy.png" align="middle"> Dragon Grand Champion Trophy.</p>
    <p><b>Requirement</b>: Upgrade Dragon Lineage to level 20 and purchase 3 Dragon Lineage perks.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk4.png" align="middle"><b> Dragon Perk 4</b></p>
    <p><b>Requirement</b>: A2+, Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Activates two breaths per cast.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DragonPerk5.png" align="middle"> Dragon Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Lineage levels count 100% more.</p>
    <hr>
    <p><b>Elite Lineages - R130+</b></p>
    <br/>
    <H6>Archon</h6>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonLineage.png" align="middle"> Archon Lineage</p></b>
    <p><b>Requirements</b>: R130+</p>
    <p><b>Cost</b>: 400 Angel, Undead Royal Exchanges</p>
    <p><b>Effect</b>: Increase Faction Coin find chance multiplicatively by 25% per level.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk1.png" align="middle"> Archon Perk 1</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: While using Archon Bloodline, increase production of Elite Unique Buildings based on maximum mana.</p>
    <p><b>Formula</b>: (0.8 * x ^ 0.8), where x is maximum mana.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Requirements</b>: Reach Lineage Level 10.</p>
    <p><b>Effect</b>: x50 more Angel and Undead Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk2.png" align="middle"> Archon Perk 2</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Archon Lineage Challenge.</p>
    <p><b>Challenge</b>: Have at least 30B (3e10) mana regeneration within 45 seconds of a new run.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Precognition).</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk3.png" align="middle"> Archon Perk 3</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Increase mana regeneration by 3% per 1000 Unique Buildings.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk4.png" align="middle"> Archon Perk 4</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 30.</p>
    <p><b>Effect</b>: Precognition also effects trophies, gems owned and faction coins found.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/ArchonPerk5.png" align="middle"> Archon Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Unique Buildings count 100% more.</p>
    <hr>
    <H6>Djinn</h6>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnLineage.png" align="middle"> Djinn Lineage</p></b>
    <p><b>Requirements</b>: R130+</p>
    <p><b>Cost</b>: 400 Fairy, Demon Royal Exchanges</p>
    <p><b>Effect</b>: Increase production bonus from gems by a multiplicative 8% for every level.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk1.png" align="middle"> Djinn Perk 1</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: Catalyst casts in this game also increase Limited Wish counter for the purpose of increasing its bonus.</p>
    <p><b>Effect</b>: All spells cost 25% less.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Requirements</b>: Reach Lineage Level 10.</p>
    <p><b>Effect</b>: x50 more Fairy and Demon Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk2.png" align="middle"> Djinn Perk 2</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Djinn Lineage Challenge.</p>
    <p><b>Challenge</b>: Have at least 1B (1e9) assistants within 45 seconds of a new run.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Limited Wish).</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk3.png" align="middle"> Djinn Perk 3</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Activity time for all spells counts 2.5% more for every 1000 Unique Buildings.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk4.png" align="middle"> Djinn Perk 4</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 30.</p>
    <p><b>Effect</b>: When Limited Wish is cast, gain +888 to automatic clicks this reincarnation.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/DjinnPerk5.png" align="middle"> Djinn Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Mana regeneration counts 200% more.</p>
    <hr>
    <H6>Makers</h6>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineage.png" align="middle"> Makers Lineage</p></b>
    <p><b>Requirements</b>: R130+</p>
    <p><b>Cost</b>: 400 Elven, Goblin Royal Exchanges</p>
    <p><b>Effect</b>: Increase Royal Exchange bonus by multiplicative 8% per level.</p>
    <br/>
    <p><b>Level 5</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk1.png" align="middle"> Makers Perk 1</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 5.</p>
    <p><b>Effect</b>: While using Makers Bloodline, the requirement for Free Excavation Reset is reduced by 25%.</p>
    <br/>
    <p><b>Level 10</b></p>
    <p><b>Requirements</b>: Reach Lineage Level 10.</p>
    <p><b>Effect</b>: x50 more Elven and Goblin Faction Coin find chance.</p>
    <br/>
    <p><b>Level 15</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk2.png" align="middle"> Makers Perk 2</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 15.</p>
    <p><b>Effect</b>: Unlocks Makers Lineage Challenge.</p>
    <p><b>Challenge</b>: Have atleast 350000 buildings within 45 seconds of a new run.</p>
    <p><b>Effect</b>: Unlocks Faction spell. (Infinite Spiral).</p>
    <br/>
    <p><b>Level 20</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk3.png" align="middle"> Makers Perk 3</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 20.</p>
    <p><b>Effect</b>: Increase Offline bonus by 10% per 500 Unique Buildings.</p>
    <br/>
    <p><b>Level 30</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk4.png" align="middle"> Makers Perk 4</p></b>
    <p><b>Requirements</b>: Reach Lineage Level 30.</p>
    <p><b>Effect</b>: While infinite spiral is active, production of all buildings increases by 1% each second, up to its maximum duration.</p>
    <br/>
    <p><b>level 45</b></p>
    <p><b><img src="http://musicfamily.org/realm/Factions/picks/MakersLineagePerk5.png" align="middle"> Makers Perk 5</p></b>
    <p><b>Requirements</b>: R130, Lineage Level 45.</p>
    <p><b>Effect</b>: Excavations count 200% more.</p>
        <?php include "../scripts/footer.html"; ?>
