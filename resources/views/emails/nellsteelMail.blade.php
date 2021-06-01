<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Devis 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <style>
      .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
  </style>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="https://nellsteel.com/wp-content/uploads/2020/11/logo.png">
      </div>
      {{-- <div id="company" class="clearfix">
        <div>{{$details['entreprise']}}</div>
        <div>{{$details['adresse']}}</div>
        <div>{{$details['telephone']}}</div>
        <div><a href="mailto:{{$details['email']}}">{{$details['email']}}</a></div>
      </div> --}}
      <div id="project">
        <div><span>ENTREPRISE: </span>{{$details['entreprise']}}</div>
        <div><span>CLIENT: </span> {{$details['entreprise']}} </div>
        <div><span>ADRESSE: </span> {{$details['adresse']}}</div>
        <div><span>EMAIL: </span> <a href="mailto:{{$details['email']}}">{{$details['email']}}</a></div>
        <div><span>DATE: </span>{{now()->format('d-m-y H:i')}} </div>
        {{-- <div><span>DUE DATE</span> September 17, 2015</div> --}}
      </div>
    </header>
    <main>
        <h2 style="text-align: center;">Demande de Devis de : {{ isset($details['nom']) ? $details['nom']: $details['entreprise'] }}</h2>
      <table>
        <thead>
          <tr>
            <th class="service">Produits</th>
            <th class="desc">Type</th>
            <th>Quantite</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
            <tr>
                <td class="service"> {{$produit['type'] }}</td>
                <td class="desc">{{ $produit['taille'] }}</td>
                <td class="unit">{{ $produit['quantite'] }} </td>
            </tr>
            @endforeach
         
        </tbody>
      </table>
      {{-- <div id="notices">
        <div>NB:</div>
        <div class="notice">.</div>
      </div> --}}
    </main>
    <footer>
    </footer>
  </body>
</html>