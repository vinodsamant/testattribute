/**
 * @api {get}  /v1/content Content
 * @apiName Content
 * @apiVersion 1.0.0
 * @apiGroup Content
 * @apiPermission none
 *
 * @apiDescription This api is used to app static content.
 *
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * @apiSuccess {String} access_token  Save access_token to localstorage.
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": [
        {
            "id": 1,
            "title": "About",
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n                Why do we use it?\n                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n                \n                Where does it come from?\n                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n                \n                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
            "status": 1,
            "created_at": "2020-05-01 17:58:31",
            "updated_at": "2020-05-01 17:58:31"
        },
        {
            "id": 2,
            "title": "Game Rules",
            "description": "Download the app and create a user name. You have the option to send an invite to your date to download the app to get to know you better. After downloading, one person chooses to begin a quiz by sending a game invite to their date’s user name.\n                Once player 2 joins, you will choose a category from the relationship level you are currently in. Next, you will see the description of the category.\n                After category selection, you will choose to begin the quiz. A quiz consists of 14 random questions pulled from 40-200 in that category. Each question shows up only on the player’s phone that’s asking the question, forcing the other player to listen and make eye contact. Player 1 reads aloud the first question to player 2 who will then answer. Player 1 then grades the effort of player 2’s answer by choosing one of five point-value answer choices. All the questions have the same five answer choices. Player 2 then reads aloud question 2, etc. Each player will not know how they are graded on each question by the other.\n                After completing the quiz, scores will be tallied based on how both players graded each other’s answers. Whoever has the most points is the winner. The winner is then prompted to choose whether or not they want another date with the other player or to start another quiz. If the answer is “yes”, then the winner gets to choose when and where their next date is by setting the date on the following screen. The winner also has the option to choose “no” to another date. Either way, 3rdDegree helps you ask for another date or get out of an obligatory  one. If a couple isn’t able to finish the quiz because the questions spawned great conversation, players have the choice to save their quiz and finish it on their next date.",
            "status": 1,
            "created_at": "2020-05-01 17:58:31",
            "updated_at": "2020-05-01 17:58:31"
        },
        {
            "id": 3,
            "title": "Privacy Policy",
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n                Why do we use it?\n                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n                \n                Where does it come from?\n                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n                \n                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
            "status": 1,
            "created_at": "2020-05-01 17:58:31",
            "updated_at": "2020-05-01 17:58:31"
        },
        {
            "id": 4,
            "title": "Terms of Service",
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n                Why do we use it?\n                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n                \n                Where does it come from?\n                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n                \n                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
            "status": 1,
            "created_at": "2020-05-01 17:58:31",
            "updated_at": "2020-05-01 17:58:31"
        }
    ],
    "message": "The request has succeeded."
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
HTTP/1.1 422 Unprocessed Entity
{
	"data": {},
	"message": "Either your credentials are incorrect or your account is not active."
}
*/