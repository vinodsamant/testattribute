/**
 * @api {get}  /v1/sent_invite Sent Invite
 * @apiName Sent Invite
 * @apiVersion 1.0.0
 * @apiGroup Game
 * @apiPermission none
 * 
 * @apiDescription This api is used to user sent invite list.
 * 
 * @apiHeader {String} Authorization Bearer <access_token>
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": [
        {
            "id": 2,
            "sender_uuid": "1f46e067-1e1a-44cf-a257-57e67775f0f5",
            "receiver_email": "emma@yopmail.com",
            "location": "Central Park, New York, NY, USA",
            "datetime": "2020-05-02 05:00:00",
            "status": 0,
            "created_at": "2020-05-01 15:25:07",
            "updated_at": "2020-05-01 15:25:07",
            "latitude": "40.7829",
            "longitude": "73.9654",
            "receiver_email_token": "c3VzaGlsQHlvcG1haWwuY29t",
            "receiver": null
        },
        {
            "id": 3,
            "sender_uuid": "1f46e067-1e1a-44cf-a257-57e67775f0f5",
            "receiver_email": "pooja@yopmail.com",
            "location": "Central Park, New York, NY, USA",
            "datetime": "2020-05-02 05:00:00",
            "status": 0,
            "created_at": "2020-05-01 15:25:15",
            "updated_at": "2020-05-01 15:25:15",
            "latitude": "40.7829",
            "longitude": "73.9654",
            "receiver_email_token": "cG9vamFAeW9wbWFpbC5jb20=",
            "receiver": {
                "id": 3,
                "uuid": "d39c1bb0-39f4-4a20-83b2-7a8772007f65",
                "fname": "Pooja",
                "lname": "Rai",
                "email": "pooja@yopmail.com",
                "gender": "female",
                "age": 25,
                "phone": null,
                "role": "2",
                "status": 1,
                "is_verified": 1,
                "email_token": "cG9vamFAeW9wbWFpbC5jb20=",
                "last_login": "2020-05-01 10:28:35",
                "created_at": "2020-05-01 09:57:06",
                "updated_at": "2020-05-01 10:28:35",
                "is_logged_in": 1,
                "device_type": null,
                "device_token": null
            }
        }
    ],
    "message": "2 sent invite(s) found"
 }
 *
 * @apiErrorExample Sample Error-Response:
 * 
HTTP/1.1 405 Method Not Allowed
{
    "data": {},
    "message": "Method Not Allowed"
}
HTTP/1.1 405 Method Not Allowed
{
    "data": {},
    "message": "Method Not Allowed"
}
HTTP/1.1 401 Unauthorized
{
    "message": "Authorization Token not found"
}
HTTP/1.1 401 Unauthorized 
{
    "message": "Token is Invalid"
}
HTTP/1.1 403 Forbidden 
{
    "message": "Token is Expired"
}
*/