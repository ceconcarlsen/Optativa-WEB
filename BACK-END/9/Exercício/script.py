#Exercício 9

dic_mercado = {1: "cebola", 2: "tomate", 3: "arroz", 4: "feijão", 5: "leite", 6: "banana", 7: "peixe",
8: "pasta dental", 9: "sabonete", 10: "shampoo"}

#filtro 
def funcao_par(arg):
    if arg % 2 == 0:
        return arg
    return -1

#imprime os elementos do dicionário que passaram pelo filtro
def minha_funcao(fun, dic):
    for i in dic:
       if fun(i) != -1:
           print(dic[i])

#chamando a função
minha_funcao(funcao_par, dic_mercado)