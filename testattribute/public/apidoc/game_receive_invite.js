/**
 * @api {get}  /v1/receive_invite Receive Invite
 * @apiName Receive Invite
 * @apiVersion 1.0.0
 * @apiGroup Game
 * @apiPermission none
 * 
 * @apiDescription This api is used to user receive invite to play game.
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
            "receiver_email": "pooja@yopmail.com",
            "location": "Central Park, New York, NY, USA",
            "datetime": "2020-05-02 05:00:00",
            "status": 0,
            "created_at": "2020-05-01 15:25:15",
            "updated_at": "2020-05-01 15:25:15",
            "latitude": "40.7829",
            "longitude": "73.9654",
            "receiver_email_token": "cG9vamFAeW9wbWFpbC5jb20=",
            "sender": {
                "id": 2,
                "uuid": "1f46e067-1e1a-44cf-a257-57e67775f0f5",
                "fname": "David",
                "lname": "Smith",
                "email": "david@yopmail.com",
                "gender": "male",
                "age": 25,
                "phone": null,
                "role": "2",
                "status": 1,
                "is_verified": 1,
                "email_token": "ZGF2aWRAeW9wbWFpbC5jb20=",
                "last_login": "2020-05-01 10:01:02",
                "created_at": "2020-05-01 09:52:28",
                "updated_at": "2020-05-01 10:01:02",
                "is_logged_in": 1,
                "device_type": null,
                "device_token": null
            }
        }
    ],
    "message": "1 invite(s) found"
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