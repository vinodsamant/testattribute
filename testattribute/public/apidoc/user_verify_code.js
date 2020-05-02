/**
 * @api {post}  /v1/verify_code Verify Code
 * @apiName Verify Code
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 *
 * @apiDescription This api is used to user verify otp.
 *
 * @apiExample Example usage:
 *
 {
	"token": "ZGF2aWQtc21pdGhAeW9wbWFpbC5jb20",
	"code": "166419"
 }
 * @apiParam {String} token token is required in body.
 * @apiParam {Number} code code is required in body.
 *
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
	"data": null,
	"message": "Code successfully verified."
 }
 * @apiErrorExample Sample Error-Response:
 * 
 HTTP/1.1 405 Method Not Allowed
 {
	"data": {},
	"message": "Method Not Allowed"
 }
 HTTP/1.1 422 Unprocessed Entity
 {
    "data": {},
    "message": "Verification Code Invalid. Please try again."
 }
 */