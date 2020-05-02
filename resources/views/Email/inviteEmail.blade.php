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
            <span style="font-size: 16px; color: #000000; font-family:Arial, Helvetica, sans-serif;">Hey,</span>
            <div style="font-size: 14px; color: #4f4f61; font-family:Arial, Helvetica, sans-serif; padding: 20px 0; line-height: 20px;">
                Let's try to get to know each other better on our date by using the 3rdDegree app that turns awkward dates into meaningful conversations.
                <br> <br>
                <b>Location: </b> {{ $data['location'] }} <br>
                <b>Date Time: </b> {{$data['datetime']}}
                <br>
                <br>
                Get it for free from the app store. https://apps.apple.com/in/app/3rdDegree/

            </div>
            <div style="font-size: 14px; color: #464646; font-family:Arial, Helvetica, sans-serif; padding: 10px 0; line-height: 20px;">
                Thank you, <br>
                <strong style="display: block; padding-top: 3px;"> {{ucfirst($sender_data->fname)}}</strong>
            </div>
        </div>
    </div>
</body>

</html>