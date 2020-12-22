<!DOCTYPE html>
<html>
<style>
    html {
        float:right;
        background-color:rgb(90, 89, 78);
    }
    #summary {
        width:500px;
    }
</style>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="table.js"></script>
</head>
<header>
    <? include "menu.html"; ?>
</header> 
<body>
    <div style="padding-left:60px">
        <h1>Select the ammo type</h1>
    <form id="myForm">
        <input type="radio" name="ammo" value="5.45x39" checked="checked">5.45x39  ||  
        <input type="radio" name="ammo" value="5.56x45">5.56x45  ||  
        <input type="radio" name="ammo" value="7.62x39">7.62x39  ||  
        <input type="radio" name="ammo" value="12GuageSlug">12GuageSlug  ||  
        <input type="radio" name="ammo" value="9x19">9x19
    </form>
    <br>
    <div id="test">
        <div class="table" id="545">
    <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
        <tbody>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Ammo Type</td>
                <td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Damage</td>
                <td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Pen Value</td>
                <td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Armor Damage %</td>
                <td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Frag. Chance*</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; height:20px; vertical-align:bottom">SP</td>
                <td style="background-color:#efefef; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">68</td>
                <td style="background-color:#efefef; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">11</td>
                <td style="background-color:#efefef; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">34</td>
                <td style="background-color:#efefef; border-right:1px solid #000000; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">45%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">HP</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">74</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">11</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">20</td>
                <td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">35%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">PRS</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">60</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">14</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">28</td>
                <td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">30%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">US</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">65</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">15</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">34</td>
                <td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">10%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">FMJ</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">54</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">20</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">30</td>
                <td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">25%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">T (Tracer)</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">57</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">20</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">38</td>
                <td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">16%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">PS</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">50</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">25</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">35</td>
                <td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">40%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">PP</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">46</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">30</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">32</td>
                <td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">17%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">BP</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">48</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">32</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">41</td>
                <td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">16%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">BT (Tracer)</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">44</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">37</td>
                <td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">49</td>
                <td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">16%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">BS</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">40</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">51</td>
                <td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">57</td>
                <td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">17%</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="1" style="background-color:#ead1dc; border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">7n39</td>
                <td style="background-color:#ead1dc; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">37</td>
                <td style="background-color:#ead1dc; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">62</td>
                <td style="background-color:#ead1dc; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">60</td>
                <td style="background-color:#ead1dc; border-bottom:1px solid #000000; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">2%</td>
            </tr>
        </tbody>
    </table>

    <p>&nbsp;</p>

    </div>
        <div class="table" id="556">
    <table border="1" cellpadding="1" cellspacing="1">
	<tbody>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Ammo Type</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Damage</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Pen Value</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Armor Damage %</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Frag. Chance*</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; height:20px; vertical-align:bottom">Warmage</td>
			<td style="background-color:#efefef; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">85</td>
			<td style="background-color:#efefef; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">3</td>
			<td style="background-color:#efefef; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">14</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">90%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">55_HP</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">75</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">9</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">22</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">70%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">MK_255_Mod_0</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">60</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">17</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">32</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">3%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">M856 (Tracer)</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">55</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">23</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">34</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">33%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">FMJ</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">52</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">24</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">33</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">50%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">M855</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">50</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">30</td>
			<td style="background-color:#ead1dc; border-bottom:1px solid #cccccc; height:20px; text-align:right; vertical-align:bottom">37</td>
			<td style="background-color:#ead1dc; border-bottom:1px solid #cccccc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">40%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">M856A1 (Tracer)</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">51</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">37</td>
			<td style="background-color:#efefef; border-bottom:1px solid #cccccc; border-right:1px solid #cccccc; height:20px; text-align:right; vertical-align:bottom">52</td>
			<td style="background-color:#efefef; border-bottom:1px solid #cccccc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">33%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">M855A1</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">45</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">43</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">52</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">34%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">M995</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">40</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">53</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">58</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">32%</td>
		</tr>
	</tbody>
</table>

</div>
        <div class="table" id="762">
    <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
	<tbody>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Ammo Type</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Damage</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Pen Value</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Armor Damage %</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Frag. Chance*</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; height:20px; vertical-align:bottom">HP</td>
			<td style="background-color:#ead1dc; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">87</td>
			<td style="background-color:#ead1dc; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">15</td>
			<td style="background-color:#ead1dc; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">35</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">26%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">US</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">56</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">29</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">42</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">8%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">T45M (Tracer)</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">62</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">30</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">46</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">12%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">PS</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">57</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">32</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">52</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">25%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">BP</td>
			<td style="background-color:#ead1dc; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">58</td>
			<td style="background-color:#ead1dc; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">47</td>
			<td style="background-color:#ead1dc; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">63</td>
			<td style="background-color:#ead1dc; border-bottom:1px solid #000000; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">12%</td>
		</tr>
	</tbody>
</table>

</div>
        <div class="table" id="12GuageSlug">
    <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
	<tbody>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Ammo Type</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Damage</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Pen Value</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Armor Damage %</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Frag. Chance*</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px dashed #000000; height:20px; vertical-align:bottom">RIP Slug</td>
			<td style="background-color:#efefef; border-top:1px dashed #000000; height:20px; text-align:right; vertical-align:bottom">265</td>
			<td style="background-color:#efefef; border-top:1px dashed #000000; height:20px; text-align:right; vertical-align:bottom">0</td>
			<td style="background-color:#efefef; border-top:1px dashed #000000; height:20px; text-align:right; vertical-align:bottom">11</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; border-top:1px dashed #000000; height:20px; text-align:right; vertical-align:bottom">100%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Superformance HP Slug</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">220</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">2</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">12</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">39%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Grizzly 40 Slug</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">190</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">12</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">48</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">12%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">HP Copper Sabot Premier</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">206</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">14</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">46</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">38%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Led Slug</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">167</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">15</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">55</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">20%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Dual Sabot Slug</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">85</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">17</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">65</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">10%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Slug "Poleva-3"</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">140</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">17</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">40</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">20%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">FTX Custom Lite Slug</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">183</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">20</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">50</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">10%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Slug "Poleva-6u"</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">150</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">20</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">50</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">15%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Shell With .50 BMG (Tracer)</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">197</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">26</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">57</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">5%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">AP 20 Slug</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">164</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">37</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">65</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">3%</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>


</div>
        <div class="table" id="919">
    <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
	<tbody>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Ammo Type</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Damage</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Pen Value</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Armor Damage %</td>
			<td style="background-color:#cccccc; border-bottom:1px solid #000000; height:20px; vertical-align:bottom">Frag. Chance*</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; border-top:1px solid #000000; height:20px; vertical-align:bottom">RIP</td>
			<td style="background-color:#ead1dc; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">102</td>
			<td style="background-color:#ead1dc; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">2</td>
			<td style="background-color:#ead1dc; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">11</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; border-top:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">100%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; height:20px; vertical-align:bottom">Quakemaker</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">85</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">8</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">22</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">25%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">PSO gzh</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">59</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">10</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">32</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">25%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Luger CCI</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">70</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">10</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">38</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">25%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">Green Tracer</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">58</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">14</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">33</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">15%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">PST gzh</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">54</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">20</td>
			<td style="background-color:#efefef; height:20px; text-align:right; vertical-align:bottom">33</td>
			<td style="background-color:#efefef; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">15%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#ead1dc; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">AP 6.3</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">52</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">30</td>
			<td style="background-color:#ead1dc; height:20px; text-align:right; vertical-align:bottom">48</td>
			<td style="background-color:#ead1dc; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">5%</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="1" style="background-color:#efefef; border-bottom:1px solid #000000; border-left:1px solid #000000; border-right:1px solid #000000; height:20px; vertical-align:bottom">7n31</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">52</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">39</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">53</td>
			<td style="background-color:#efefef; border-bottom:1px solid #000000; border-right:1px solid #000000; height:20px; text-align:right; vertical-align:bottom">5%</td>
		</tr>
	</tbody>
</table>
</div>
    </div>
    </div>
</body>
<footer style="padding-left:60px">
    <p id="summary"><strong>This page uses javascript and the higher order JQuery library to show and hide a variety of tables. One of the radio buttons is enabled by default, I use a JavaScript switch statement to show the selected table, and then the .siblings() selector to hide the other tables.</strong> </p>
</footer>

</html>