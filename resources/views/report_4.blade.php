<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&display=swap" rel="stylesheet">
        <title>Report</title>
        <style>
            @page {
                margin: 20px 25px;
            }
            body {
                font-family: 'EB Garamond', serif;
                font-size: 12px;
            }

            p.sign {
                font-family: Georgia,Times,Times New Roman,serif;
            }

            h3 {
                text-align: center;
                margin-bottom: 0;
            }

            td {
                vertical-align: top;
            }

            p {
                margin-top: 4px;
                margin-bottom: 4px;
            }

            div.true-copy {
                position: absolute;
                right: 0;
                top: 0;
                border: 2px solid #000;
                text-align:center;
                width: 100px;
                padding: 5px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <hr />               
        <div class="header">
            <h3>PALAV AGARWAL<br />JP LEGAL</h3>           
            <p style="text-align:center;">
                <strong>(Advocates & Legal Consultants)</strong><br />
                Office: 30, Tower 1, Supreme Enclave, Mayur Vihar Phase-1, New Delhi-110091.<br />
                BAR COUNCIL DELHI ID D/1432/14<br />
                Contact: - 9911980014
            </p>
        </div>
        <hr />
        <h3><u>COURT RECORD CHECK</u></h3> <br>
        <table width="100%" cellpadding="1" cellspacing="0" border="2">
            <tr>
                <td colspan="2">APPLICATION INFORMATION :-</td>
            </tr>          
            <tr>
                <td><strong>NAME OF THE SUBJECT</strong></td>                
                <td><strong>{{$data['name']}}</strong></td>
            </tr>            
            <tr>
                <td><strong>DATE OF BIRTH</strong></td>                
                <td><strong>{{$data['dob']}}</strong></td>
            </tr>
            <tr>
                <td width="25%"><strong>CASE REFERENCE</strong></td>
                <td><strong>{{$data['check_id']}}</strong></td>
            </tr>
            <tr>
                <td><strong>FATHER'S NAME</strong></td>                
                <td><strong>{{$data['father_name']}}</strong></td>
            </tr>
            <tr>
                <td><strong>ADDRESS</strong></td>                
                <td><strong>{{$data['address']}}</strong></td>
            </tr>  
            <tr>
                <td><strong>PERIOD OF STAY</strong></td>                
                <td><strong>NA</strong></td>
            </tr>  
            <tr>
                <td><strong>NOTE</strong></td>                
                <td><strong>Duration of records checked is last 07 Years.</strong></td>
            </tr>     
            <tr>
                <td colspan="2"><b>VERIFICATIO DETAILS :-</b></td>
            </tr>    
            <tr>
                <td><strong>FINAL RESULT</strong></td>               
                <td><b>No Record Found</b></td>
            </tr>    
            <tr>
                <td><strong> VERIFICATION DATE</strong></td>                
                <td><strong>{{$data['verification_date']}}</strong></td>
            </tr>
        </table>

        <h3><u>RESULTS</u></h3>
        <p><strong>1. <u>Criminal Proceedings: Criminal Petition / Criminal Appeal / Sessions Cases / Special Session Cases, Criminal, Miscellaneous Petition / Criminal Revision Appeal</u></strong></p>
        <table width="100%" cellpadding="1" cellspacing="0" border="1">
            <tr>
                <td style="text-align:center; font-weight:bold; width:25%"><strong><u>COURT</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:20%"><strong><u>JURISDICTION</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:20%"><strong><u>NAME OF COURT</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:20%"><strong><u>RESULT</u></strong></td>
                <td style="text-align:center; font-weight:bold;"><strong><u>PERIOD</u></strong></td>
            </tr>
            <tr>
                <td>MAGISTRATE COURT</td>
                <td>Criminal Cases (CC), Private Complaint Report (PCR)</td>
                <td>CJM COURTS</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>SESSIONS COURTS</td>
                <td>CRIMINAL APPEALS</td>
                <td>DISTRICT AND  SESSIONS COURTS</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>HIGH COURT</td>
                <td>CRIMINAL APPEALS</td>
                <td>DELHI HIGH COURTS </td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>SUPREME COURT</td>
                <td>APPEALS</td>
                <td>SUPREME COURT OF INDIA</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
        </table>

        <p><strong>2. <u>Civil Proceedings: Original Suit / Miscellaneous Suit / Execution / Arbitration Cases</u></strong></p>
        <table width="100%" cellpadding="1" cellspacing="0" border="1">
            <tr>
            <td style="text-align:center; font-weight:bold; width:25%"><strong><u>COURT</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:20%"><strong><u>JURISDICTION</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:20%"><strong><u>NAME OF COURT</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:20%"><strong><u>RESULT</u></strong></td>
                <td style="text-align:center; font-weight:bold;"><strong><u>PERIOD</u></strong></td>
            </tr>
            <tr>
                <td>DISTRICT COURT/LOWER COURT/ CIVIL COURT & SMALL CAUSES</td>
                <td>Original Suit</td>
                <td>ALL INDIA COURTS</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>HIGH COURT</td>
                <td>APPEALS</td>
                <td>DELHI HIGH COURTS </td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>SUPREME COURT</td>
                <td>APPEALS</td>
                <td>SUPREME COURT OF INDIA</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
        </table>

      

        <p>
            <strong><u>Conclusion:</u></strong> As on the date of this search and as on the records of the jurisdictional courts, there is no original or civil cases or
                criminal cases against the subject.
        </p>
      
        <p>
            Yours Truly<br />
            <img src="images/sign.jpg" /><br />
            (PALAV AGARWAL)<br />
            <span style="color: #538dd5;"><strong>
                JP LEGAL<br />
                Advocates & Legal Consultants<br />
                30, Tower 1, Supreme Enclave<br />
                Mayur Vihar Phase-1<br />New Delhi-110091
            </strong></span>
        </p>

    </body>
</html>
