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

      
            #project span {
              color: black;
              margin-right: 10px;
              display: inline-block;
              line-height: 0em;
            }


            #project strong {
              line-height: 2em;
              text-align: right;
            }
      
            #project div,
          
            #company div {
              white-space: nowrap;        
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
      
            #notices .notice {
              color: black;
              font-size: 1.2em;
              margin-left: 25px;
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
            No Index : {{ $doctor_name}}
        </div>

        <div id="title">
            <h1>Medical Record</h1>
            <h4> Outpatient Patients Card</h4>
        </div>
        
        <div id="project">
        <div><span>Name</span><strong>-</strong></div>
          <div><span>Address</span><strong> COTTON COMBED FRENCH TERRY</strong></div>
          <div><span>Telephone</span><strong> 34" / 186</strong></div>
        </div>
      </header>
      <main>
        <div id="notices">
            <div>Date : {{ $start_date }}</div>
        </div>

        <div id="notices" class="text">
          <div class="sample">
          </div>
        </div>
      </main>
      <footer>
        Document was created on a computer and is valid without the signature and seal.
      </footer>
    </body>
  </html>