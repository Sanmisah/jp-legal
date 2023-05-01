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
            <h3>PALAV AGARWAL<br />JP LEGAL</h3>
            <div class="true-copy">
                TRUE COPY
            </div>
            <p style="text-align:center;">
                <strong>(Advocates & Legal Consultants)</strong><br />
                Office: 30, Tower 1, Supreme Enclave, Mayur Vihar Phase-1, New Delhi-110091.<br />
                BAR COUNCIL DELHI ID D/1432/14<br />
                Contact: - 9911980014
            </p>
        </div>
        <hr />
        <h3><u>TO WHOMSOEVER IT MAY CONCERN</u></h3>
        <p>This information is given with regard to the search conducted for:</p>
        <table width="100%" cellpadding="1" cellspacing="0">
            <tr>
                <td width="25%"><strong>CHECK ID</strong></td>
                <td width="5%"><strong>:</strong></td>
                <td>{{$data['check_id']}}</td>
            </tr>
            <tr>
                <td><strong>CANDIDATE NAME</strong></td>
                <td><strong>:</strong></td>
                <td>{{$data['name']}}</td>
            </tr>
            <tr>
                <td><strong>DATE OF BIRTH</strong></td>
                <td><strong>:</strong></td>
                <td>{{$data['dob']}}</td>
            </tr>
            <tr>
                <td><strong>FATHER'S NAME</strong></td>
                <td><strong>:</strong></td>
                <td>{{$data['father_name']}}</td>
            </tr>
            <tr>
                <td><strong>ADDRESS</strong></td>
                <td><strong>:</strong></td>
                <td>{{$data['address']}}</td>
            </tr>           
            <tr>
                <td><strong>DATE OF VERIFICATION</strong></td>
                <td><strong>:</strong></td>
                <td>{{$data['verification_date']}}</td>
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
        </table>

        <p>The above information is verified vide online litigation database with the provided name of Applicant.</p>
        <p>
            <strong><u>Conclusion:</u></strong> As on the date of this search and as per the online litigation database there is no Civil or Criminal case
            instituted against the Reference Number raised before us. The information is subject to the search conducted within the Jurisdictional limits
            of the Address of the Candidate provided. Hence, this information is subjective in nature.
        </p>
        <p>
            <strong><u>Disclaimer:</u></strong> Proper due diligence has been conducted in retrieval of the information as per the public records available. The information is
            gained on the instruction of Client and the undersigned is not liable for any act of error, omission, deletion or non publication of records of
            the concerned court. This information may not be treated as a Certificate.
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
