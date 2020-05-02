<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3rd Degree</title>
</head>

<body>
    <div style=" padding:10px; font-family:Arial, Helvetica, sans-serif;">
        <div style="width: 68px; height: 68px;">
            <img src="{{ asset('img/3rd_degree.png') }}" width="68" height="68" alt="3rd degree" />
        </div>
        <div style="padding-top:10px"></div>
        <div style="border-radius: 3px; box-shadow: 0px 0px 5px rgba(0,0,0,0.15); padding: 30px 20px;">
            <span style="font-size: 16px; color: #000000; font-family:Arial, Helvetica, sans-serif;">Hi, {{ucfirst($user->fname)}}</span>
            <div style="font-size: 14px; color: #4f4f61; font-family:Arial, Helvetica, sans-serif; padding: 20px 0; line-height: 20px;">
                <?php
                if ($type == config('constant.email_verification_type.SIGNUP'))
                    echo config('constant.msgs.signup_verify_text');
                elseif ($type == config('constant.email_verification_type.FORGOT_PASSWORD'))
                    echo config('constant.msgs.forgot_password_text');
                elseif ($type == config('constant.email_verification_type.EMAIL_UPDATE'))
                    echo config('constant.msgs.email_updation_text');
                else
                    echo config('constant.msgs.resend_code_text');
                ?>
            </div>
            <table width="166" class="buttonwrapper equal second" border="0" cellspacing="0" cellpadding="0" style="background-color:#fff;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;border-width:1px;border-style:dashed;border-color:#979797;">
                <tr>
                    <td class="button" height="44" style="text-align:center;font-size:14px;font-family:Arial, Helvetica, sans-serif;font-weight:400;padding-top:0;padding-bottom:0;padding-right:10px;padding-left:10px;text-transform:uppercase;cursor:pointer; ">
                        <a href="#" style="color:#4f4f61;text-decoration:none; font-weight: 700;">{{$verify_code}}</a>
                    </td>
                </tr>
            </table><br />
            <div style="font-size: 14px; color: #464646; font-family:Arial, Helvetica, sans-serif; padding: 10px 0; line-height: 20px;">
                Thank you,<br>
                <strong style="display: block; padding-top: 3px;">Team 3rdDegree</strong>
            </div>
        </div>
    </div>
</body>

</html>