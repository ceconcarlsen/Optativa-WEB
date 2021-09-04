from flask import Flask, render_template, request

app = Flask(__name__) #objeto flask

@app.route("/") #localhost:5000 abre index.html (template)
def index():
    return render_template("index.html")

@app.route('/result', methods = ["POST","GET"]) #localhost:5000/result
def result():
    if request.method == "POST": #se for POST, result é o request do form
        result = request.form
        return render_template ("result.html", result = result ) #renderiza 

if __name__ == "__main__":
    app.run()

