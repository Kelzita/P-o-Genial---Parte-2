from selenium import webdriver 
from selenium.webdriver.common.by import By 
import time

driver = webdriver.Chrome()

driver.get("file:///C:/xampp/htdocs/Teste-de-Sistema/Atividade/produto.html")
# Mudar de acordo com o diretório do arquivo. Utilizando "file://" 

#Preenche o campo do "ID"
id_input = driver.find_element(By.ID,"id") 
id_input.send_keys("1")

#Preenche o campo "descrição"
descricao_input = driver.find_element(By.ID,"descricao")
descricao_input.send_keys("Compacto, econômico e confiável, o Volkswagen Gol 1.6 MSI é ideal para o dia a dia. Equipado com motor 1.6 flex, direção hidráulica, ar-condicionado, vidros elétricos e sistema de som com Bluetooth. Ótimo custo-benefício para quem busca desempenho e baixo consumo.")

#Preenche o campo "marca"
marca_input = driver.find_element(By.ID, "marca")
marca_input.send_keys("Volkswagen")
#pode ser textarea inves do input também :)

#Preenche o campo Quantidade
quantidade_input = driver.find_element(By.ID,"quantidade")
quantidade_input.send_keys("250")

#Preenche o campo Preço 
preco_input = driver.find_element(By.ID, "preco")
preco_input.send_keys("58.990,00")

#Clica no botão Cadastrar ( Comente essa linha caso queira visualizar melhor! :D)
#submit_button = driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
#submit_button.click()

#Tempo pra visualizar o resultado
time.sleep(110)

#Fecha o navegador
driver.quit()


#--------------------

from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

# Preenche o campo CEP
cep_input = driver.find_element(By.ID, "cep")
cep_input.clear()
cep_input.send_keys("01001000")  # CEP real, Praça da Sé - SP

# Clica na lupa ou botão de busca
botao_buscar = driver.find_element(By.CSS_SELECTOR, "button[type='button']")
botao_buscar.click()

# Aguarda os campos serem preenchidos
wait = WebDriverWait(driver, 10)

# Aguarda cada campo individualmente
rua = wait.until(EC.presence_of_element_located((By.ID, "rua")))
bairro = wait.until(EC.presence_of_element_located((By.ID, "bairro")))
cidade = wait.until(EC.presence_of_element_located((By.ID, "cidade")))
estado = wait.until(EC.presence_of_element_located((By.ID, "uf")))  # ou "estado", dependendo do ID

# (Opcional) Imprimir para verificar
print("Rua:", rua.get_attribute("value"))
print("Bairro:", bairro.get_attribute("value"))
print("Cidade:", cidade.get_attribute("value"))
print("Estado:", estado.get_attribute("value"))
