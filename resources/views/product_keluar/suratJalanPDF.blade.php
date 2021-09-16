<html>
<head>
    <meta charset="utf-8">
    <title>Surat Jalan</title>
</head>
<style>

#content {
	margin-left: 200px;
	padding: 20px 10px 0 0;
	margin-bottom:2px;
	border:1px solid #F95;
}
#content p {
	font-size: 85%;
	line-height: 1.8em;
	padding-left: 2em;
}

h2 {
	font:Verdana, Geneva, sans-serif;
	color:#000;
	background-color: transparent;
	border-bottom: 1px  #265180;
}
table {
	font-family:Verdana, Geneva, sans-serif; 
	font-size: 10pt;
	border-width: 1px;
	border-style: solid;
	border-color:#000;
	border-collapse: collapse;
	margin: 10px 0px;
}
th{
	color:#000;
	font-size: 7pt;
	text-transform: uppercase;
	padding: 0.5em;
	border-width: 1px;
	border-style: solid;
	border-color:#000;
	border-collapse: collapse;
	background-color:#FFF;
}



td{
	padding: 0.5em;
	vertical-align: top;
	border-width: 1px;
	border-style: solid;
	border-color: #000;
	border-collapse: collapse;
}
	p{
		margin-left: 330px;
		
	}
  
</style>
<body> 
<img src="http://www.ridhojaya.com/images/rj_brand.png" width="180" height="80" align="left">
<div>
<p>Jl. Jawaringan No. 58 RT.004/003<br>
  Mekarbakti, Panongan, Tangerang 15710<br>
  Tangerang, Banten 17000 Telp. 021 -59641708</p>
<p> Tangerang, {{ $product_keluar->tanggal }}</p>
</div>
 <table width="470" border="0">
  <tbody>
  <tr>
  <th width="470" align="center"><h3>SURAT JALAN</h3></th>
      
  </tr>
      <tr><th align="center"><h5>SJ/100{{ $product_keluar->id }}/2021</h5></th>
      </tr></tbody></table>
  <table width="480" border="0">
  <tbody><tr><th width="88" align="left">Kepada</th>
      <th width="14" scope="col">:</th>
    <th align="left">{{ $product_keluar->customer->nama }}</th></tr>
  <tr><th align="left">Alamat</th>
      <th width="14" scope="col">:</th>
<th align="left">{{ $product_keluar->customer->alamat }}</th></tr></tbody></table><br>
	<table width="480" border="0" bgcolor="#000000">
      <tbody><tr bgcolor="#FFFFFF" height="40">
        <th width="1%" scope="col">No</th>
        <th width="3%" scope="col">ID Barang</th>
        <th width="10%" scope="col">Nama Barang</th>
        <th width="4%" scope="col">Banyaknya</th>
      </tr>
<tr bgcolor="white">
              <td align="center">1</td>
              <td align="center">{{ $product_keluar->product->id }}</td>
              <td align="center">{{ $product_keluar->product->nama }}</td>
			  <td align="center">{{ $product_keluar->qty }}</td>
            </tr></tbody></table>
   <br>
<table width="480" border="1">
  <tbody><tr>
    <th scope="col">Issued by</th>
    <th scope="col">Aproved by</th>
    <th scope="col">Delivered by</th>
    <th scope="col">Received by</th>
  </tr>
  <tr>
    <th height="83" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th align="left">Nama :</th>
    <th align="left">Nama :</th>
    <th align="left">Nama :</th>
    <th align="left">Nama :</th>
  </tr>
  <tr>
    <th align="left">Tanggal :</th>
    <th align="left">Tanggal :</th>
    <th align="left">Tanggal :</th>
    <th align="left">Tanggal :</th>
  </tr>


</body>