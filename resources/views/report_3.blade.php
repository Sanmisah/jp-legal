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
                margin-top: 5px;
                margin-bottom: 5px;
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
        <div class="header">
            <table width="100%" cellpadding="1" cellspacing="0" border="1">
                <tr>
                    <td width="35%"></td>
                    <td>
                        <h2>Parishram Resources Pvt ltd</h2>          
                        <p>
                            <strong>Plot no 14 A ATC Tower 7 th Floor Sector 18 Gurugram<br />
                            Haryana 122015</strong> <br>
                        
                        </p>
                    </td>
                </tr>
            </table>
           
        </div>
        <hr />
        <h3><u>TO WHOMSOEVER IT MAY CONCERN</u></h3>
        <p>This information is given with regard to the search conducted for:</p>
        <table width="100%" cellpadding="1" cellspacing="0" border="3">
            <tr>
                <td><strong>NAME</strong></td>                
                <td><strong>{{$data['name']}}</strong></td>
            </tr>      
            <tr>
                <td><strong>DATE OF BIRTH</strong></td>                
                <td><strong>{{$data['dob']}}</strong></td>
            </tr>
            <tr>
                <td><strong>FATHER'S NAME</strong></td>                
                <td><strong>{{$data['father_name']}}</strong></td>
            </tr>      
            <tr>
                <td><strong>DATE OF VERIFICATION</strong></td>                
                <td><strong>{{$data['verification_date']}}</strong></td>
            </tr>
            <tr>
                <td width="25%"><strong>Duration Of Records Check</strong></td>
                <td><strong>07 Years</strong></td>
            </tr>  
            <tr>
                <td width="25%"><strong>Verification Result</strong></td>
                <td><strong>NO RECORD FOUND</strong></td>
            </tr>     
            <tr>
                <td><strong>Report End Time</strong></td>                
                <td><strong>{{$data['verification_date']}}</strong></td>
            </tr>
        </table>

        <h3><u>RESULTS</u></h3>
        <p><strong>1. <u>Civil Proceedings: Original Suit / Miscellaneous Suit / Execution / Arbitration Cases</u></strong></p>
        <table width="100%" cellpadding="1" cellspacing="0" border="1">
            <tr>
                <td style="text-align:center; font-weight:bold; width:35%"><strong><u>COURT</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:25%"><strong><u>NAME OF COURT</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:25%"><strong><u>RESULT</u></strong></td>
                <td style="text-align:center; font-weight:bold;"><strong><u>PERIOD</u></strong></td>
            </tr>
            <tr>
                <td>DISTRICT COURT/LOWER COURT/ CIVIL COURT & SMALL CAUSES</td>
                <td>ALL INDIA COURTS</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>HIGH COURT</td>
                <td>ALL HIGH COURTS OF INDIA</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>SUPREME COURT</td>
                <td>SUPREME COURT OF INDIA</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>FIR</td>
                <td>All FIR's</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>ARRESTED</td>
                <td>All Arrested</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>TRIBUNALS</td>
                <td>All Tribunals of India</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
        </table>

        <p><strong>2. <u>Criminal Proceedings: Criminal Petition / Criminal Appeal / Sessions Cases / Special Session Cases, Criminal, Miscellaneous Petition / Criminal Revision Appeal</u></strong></p>
        <table width="100%" cellpadding="1" cellspacing="0" border="1">
            <tr>
                <td style="text-align:center; font-weight:bold; width:35%"><strong><u>COURT</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:25%"><strong><u>NAME OF COURT</u></strong></td>
                <td style="text-align:center; font-weight:bold; width:25%"><strong><u>RESULT</u></strong></td>
                <td style="text-align:center; font-weight:bold;"><strong><u>PERIOD</u></strong></td>
            </tr>
            <tr>
                <td>District Court/lower Court/Civil</td>
                <td>ALL Indian COURTS</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>MAGISTRATE COURT</td>
                <td>ALL MAGISTRATE COURTS</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>SESSIONS COURTS</td>
                <td>ALL SESSIONS COURTS</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>HIGH COURT</td>
                <td>ALL HIGH COURTS OF INDIA</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>SUPREME COURT</td>
                <td>SUPREME COURT OF INDIA</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>FIR</td>
                <td>All FIR's</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>ARRESTED</td>
                <td>All Arrested</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
            <tr>
                <td>TRIBUNALS</td>
                <td>All Tribunals of India</td>
                <td><u>NO RECORD FOUND</u></td>
                <td><u>10 YEARS</u></td>
            </tr>
        </table>

        <p style="color:green;">
            <strong><u>Conclusion:</u></strong> In Conclusion, as on date of this search, there appears no case instituted against the Subject, at the
                given address.
        </p>
        <p>
            <strong><u>Lawyer's Comment:</u></strong> 
        </p>
        <p>
            <strong><u>Yours Truly</u></strong>           
        </p>
        <table>
            <tr>
                <td width="15%"> <img src="images/sign.jpg" /> </td>
                <td> <strong>
                    Digitally Signed By Adv Palav Agarwal <br>
                    24-04-2023   </strong>
                </td>
            </tr>
        </table> 
        <br><br><br> <br> <br>
        <u><p><strong>*Disclaimer and limitations of liability:</strong></p></u>
        <p>
            1. The reports generated will be based on the available records on the internet, it is highly recommended that the
            court record checks be repeated atleast once every quarter to cover the old cases entering the court record system. We
            are not responsible for a case existing in offline database but not entered in online court database. <br>
            2. The data on the internet uploaded by courts might have been changed, deleted, modified, we do not take the
            responsibility of the same. We serve as-is basis. <br>
            3. Our reports do not and will not assert that the individual being searched for is the person found in the records.
            Unless the client takes the ID confirmation from Police Service. <br>
            4. We will not be liable for the following:
            a. Records that are not present in our database at any given point in time. <br>
            b. Inaccurate labeling of any individual case.
            c. Insufficiency of input data leading to inaccurate results.
        </p>
        <p align="center">Private and confidential</p>

    </body>
</html>
