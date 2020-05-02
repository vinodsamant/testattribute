/**
 * @api {get}  /v1/category Category
 * @apiName Category
 * @apiVersion 1.0.0
 * @apiGroup Game
 * @apiPermission none
 * 
 * @apiDescription This api is used to get category list.
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
            "id": 1,
            "title": "The Basics",
            "description": "The basic, fun questions we all want to know.",
            "status": 1,
            "created_at": "2020-04-28 17:03:31",
            "updated_at": "2020-04-28 17:03:31"
        },
        {
            "id": 2,
            "title": "It's Not a Habit, It's a Hobby.",
            "description": "The basic, fun questions we all want to know.",
            "status": 1,
            "created_at": "2020-04-28 17:03:31",
            "updated_at": "2020-04-28 17:03:31"
        },
        {
            "id": 3,
            "title": "I Know What I Want.",
            "description": "The basic, fun questions we all want to know.",
            "status": 1,
            "created_at": "2020-04-28 17:03:31",
            "updated_at": "2020-04-28 17:03:31"
        }
    ],
    "message": "3 categories found"
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