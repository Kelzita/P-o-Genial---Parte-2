from selenium import webdriver 
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC 
from selenium.webdriver.support.ui import Select 
import time 

driver = webdriver.Chrome()

driver.get("https://localhost:8080/p-o-Genial---Parte-2/html_cadastros/cadastrar_funcionarios.html")

#Preenchimento do Nome do Funcionário

nome_funcionario_input = driver.find_element(By.ID, "nome_funcionario")
nome_funcionario_input.send_keys("Adriana Silva Martins")

#Preenchimento do CPF 

