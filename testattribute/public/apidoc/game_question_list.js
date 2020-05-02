/**
 * @api {get}  /v1/question/{id} Question
 * @apiName Question
 * @apiVersion 1.0.0
 * @apiGroup Game
 * @apiPermission none
 * 
 * @apiDescription This api is used to get question list.
 * 
 * @apiHeader {String} Authorization Bearer <access_token>
 * 
 * @apiParam {Number} id Category Id is required in url.
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "category_id": 1,
                "title": "Are you a morning person or a night owl?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 2,
                "category_id": 1,
                "title": "What is your favourite type(s) of food?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 3,
                "category_id": 1,
                "title": "Favourite kind of vacation?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 4,
                "category_id": 1,
                "title": "Favourite type of movies? Then list top 3 fav movies of all time.",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 5,
                "category_id": 1,
                "title": "Do you prefer indoor or outdoor? Then what do you like indore/outdoor?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 6,
                "category_id": 1,
                "title": "If you  had $25,000, what would you do with it?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 7,
                "category_id": 1,
                "title": "What is the last show you binge-watched?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 8,
                "category_id": 1,
                "title": "What is your favorite season and why?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 9,
                "category_id": 1,
                "title": "What you an introvert or extrovert?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            },
            {
                "id": 10,
                "category_id": 1,
                "title": "What you have any phobias?",
                "status": 1,
                "created_at": "2020-04-30 10:18:26",
                "updated_at": "2020-04-30 10:18:26",
                "category": {
                    "id": 1,
                    "title": "The Basics",
                    "description": "The basic, fun questions we all want to know.",
                    "status": 1,
                    "created_at": "2020-04-30 10:18:26",
                    "updated_at": "2020-04-30 10:18:26"
                }
            }
        ],
        "first_page_url": "http://127.0.0.1:8000/api/v1/question/1?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http://127.0.0.1:8000/api/v1/question/1?page=2",
        "next_page_url": "http://127.0.0.1:8000/api/v1/question/1?page=2",
        "path": "http://127.0.0.1:8000/api/v1/question/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10,
        "total": 14
    },
    "message": "14 questions found"
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