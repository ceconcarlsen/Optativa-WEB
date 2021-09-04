from flask import Flask, request, url_for, flash, render_template, redirect
app = Flask(__name__)

app.secret_key = "chave super secreta"

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/login', methods = ['GET','POST'])
def login():
    error = None

    if request.method == 'POST':
        if request.form['username'] != 'admin' or request.form['password'] != 'admin':
            error = "Invalid username or password, please try again !"
        else:
            flash("You are successfully logged in !")
            return redirect(url_for('index'))

    return render_template('login.html',error = error)


if __name__ == "__main__":
    app.run(debug=True)