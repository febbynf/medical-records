<html>
    <head>
        <meta charset="utf-8">
        <title>Medical Record</title>
        <style>
            .clearfix:after {
              content: "";
              display: table;
              clear: both;
            }

            a {
              color: black;
              text-decoration: underline;
            }
      
            body {
              position: relative;
              margin: 0 auto; 
              color: #001028;
              background: #FFFFFF; 
              font-family: Georgia, serif;
              font-size: 12px;
              letter-spacing: 2px;
            }
      
            header {
              padding: 10px 0;
              margin-bottom: 10px;
            }
      
            #logo {
              text-align: left;
            }
      
            #logo img {
              width: auto;
              height: 50px;
            }

            #index{
              text-align: right;
              margin-bottom: 20px;
            }
      
            #title {
              border-top: 1px solid  black;
              border-bottom: 1px solid  black;
              color: black;
            }

            #title h1 {
              font-size: 2.4em;
              line-height: 1.4em;
              font-weight: bold;
              text-align: center;
              margin: 0 0 10px 0;
            }

            #title h4 {
              font-size: 1.3em;
              line-height: 0.3em;
              font-weight: normal;
              text-align: center;
              margin: 0 0 10px 0;
            }
          
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
              color: black;
              border-bottom: 1px solid #C1CED9;
              white-space: nowrap;        
              font-weight: normal;
            }
      
            table .yarn,
            table .desc {
              text-align: left;
              /* font-size: 1.2em; */
            }
      
            table td {
              padding: 10px;
              text-align: right;
            }
      
            table td.yarn,
            table td.desc {
              vertical-align: top;
            }
      
            table td.unit,
            table td.qty,
            table td.total,
            table td.percentage, {
              /* font-size: 1.2em; */
              text-align: center;
            }
      
            table td.grand {
              border-top: 1px solid black;
            }

            .sample {
                margin-right: 5px;
                margin-left : 5px;
                margin-top: 5px;
                margin-bottom : 20px;
                border: 1px solid black;
                height: 80%;
            }

            .text {
              text-align: center;
            }
      
            footer {
              color: black;
              width: 100%;
              height: 30px;
              position: absolute;
              bottom: 0;
              border-top: 1px solid #C1CED9;
              padding: 8px 0;
              text-align: center;
            }
          </style>
    </head>
    <body>

    <header class="clearfix">
        <div id="logo">
            <img src="{{ public_path('admin/assets/images/logo-1.png')}}">
            <img src="{{ public_path('admin/assets/images/logo-text-1.png')}}">
        </div>
        <div id="index">
            Date : {{ \Carbon\Carbon::parse($start_date)->format('j F Y') }}
        </div>
        <div id="title">
            <h1>Medical Record</h1>
            {{-- <h4>Outpatient Patients Card</h4> --}}
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                <th class="yarn">Doctor</th>
                <th>Patient</th>
                <th>Anamnesia</th>
                <th>History of Disease</th>
                <th>Physical Examination</th>
                <th>Clinical Findings</th>
                <th>Diagnosis</th>
                <th>Medicine</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medical_records as $medical_record)
                <tr>
                    <td class="yarn">{{ $medical_record->nama_dokter }}</td>
                    <td class="percentage">{{ $medical_record->nama_pasien }}</td>
                    <td class="total">{!! $medical_record->anamnesia == 1 ? '<span style="font-family: DejaVu Sans; font-size:12px;">✓</span>' :  '<span style="font-family: DejaVu Sans; font-size:12px;">⨯</span>' !!}</td>
                    <td class="unit">{!! $medical_record->riwayat_perjalanan_penyakit == 1 ? '<span style="font-family: DejaVu Sans; font-size:12px;">✓</span>' :  '<span style="font-family: DejaVu Sans; font-size:12px;">⨯</span>' !!}</td>
                    <td class="total">{!! $medical_record->pemeriksaan_fisik == 1 ? '<span style="font-family: DejaVu Sans; font-size:12px;">✓</span>' :  '<span style="font-family: DejaVu Sans; font-size:12px;">⨯</span>' !!}</td>
                    <td class="unit">{!! $medical_record->penemuan_klinik == 1 ? '<span style="font-family: DejaVu Sans; font-size:12px;">✓</span>' :  '<span style="font-family: DejaVu Sans; font-size:12px;">⨯</span>' !!}</td>
                    <td class="total">{!! $medical_record->diagnosa == 1 ? '<span style="font-family: DejaVu Sans; font-size:12px;">✓</span>' :  '<span style="font-family: DejaVu Sans; font-size:12px;">⨯</span>' !!}</td>
                    <td class="total">{!! $medical_record->obat_rs == 1 ? '<span style="font-family: DejaVu Sans; font-size:12px;">✓</span>' :  '<span style="font-family: DejaVu Sans; font-size:12px;">⨯</span>' !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </main>
      <footer>
        copyright © <script> document.write(new Date().getFullYear()); </script> - Developed System by<b><a href="https://github.com/febbynf" target="_blank">Febby Nurfitriyani</a></b>
      </footer>
    </body>
  </html>