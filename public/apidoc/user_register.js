/**
 * @api {post}  /v1/register Register
 * @apiName Register
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 *
 * @apiDescription This api is used to user registration.
 *
 * @apiExample Example usage:
 *
 {
	"role": 2,
	"fname": "David",
	"lname": "Smith",
	"gender": "male",
	"age": 25,
	"email": "david@yopmail.com"
 }
 * @apiParam {Number} role Role(2=>App User) is required in body.
 * @apiParam {String} fname First name is required in body.
 * @apiParam {String} lname Last name is required in body.
 * @apiParam {String} gender Gender(male|female) is required in body.
 * @apiParam {Number} age Age is required in body.
 * @apiParam {String} email Email is required in body.
 *
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
	"data": {
		"type": "signup",
		"email_token": "ZGF2aWRAeW9wbWFpbC5jb20=",
		"verify_code": 512789
	},
	"message": "Sign Up successful! Please check your email for account activation code."
 }
 *
 *
 * @apiErrorExample Sample Error-Response:
 * 
HTTP/1.1 405 Method Not Allowed
{
	"data": {},
	"message": "Method Not Allowed"
}
HTTP/1.1 417 Expectation Failed
{
	"data": {},
	"message": "The email field is required."
}
HTTP/1.1 417 Expectation Failed
{
	"data": {},
	"message": "Email already taken. Please try another one"
}
*/