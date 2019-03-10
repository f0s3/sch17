const mongoose = require("mongoose");
const Schema = mongoose.Schema;

const booksSchema = new Schema({
	title: String,
	sourcePath: String,
	imagePath: String
});

module.exports = mongoose.model("Books", booksSchema);