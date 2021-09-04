from flask import Flask, app, render_template
app = Flask(__name__)

"""
o url result chama a função result() que renderiza em result.html o my_dict
"""
@app.route("/result")
def result():
    my_dict = {"phy":50, "che":60, "maths":70}
    return render_template("result.html", result = my_dict)

if __name__ == "__main__":
    app.run(debug = True)