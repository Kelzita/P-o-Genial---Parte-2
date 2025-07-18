function formatCEP(input) {
    let value = input.value.replace(/\D/g, ''); // Remove non-digits
    if (value.length > 5) {
      value = value.substring(0, 5) + '-' + value.substring(5, 8);
    }
    input.value = value;
  }

  async function buscarCEP(cep) {
    cep = cep.replace(/\D/g, ''); // Clean CEP
    if (cep.length !== 8) return;

    try {
      const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
      const data = await response.json();

      if (!data.erro) {
        document.getElementById('rua_fornecedor').value = data.logradouro;
        document.getElementById('bairro_fornecedor').value = data.bairro;
        document.getElementById('cidade_fornecedor').value = data.localidade;
        populateUfSelect(data.uf); // Function to pre-select UF
      } else {
        alert('CEP não encontrado.');
      }
    } catch (error) {
      console.error('Erro ao buscar CEP:', error);
      alert('Erro ao buscar CEP. Tente novamente mais tarde.');
    }
  }

  // Function to populate UF select and pre-select based on CEP data
  function populateUfSelect(selectedUf = '') {
    const ufSelect = document.getElementById('uf_fornecedor');
    const estados = [{ uf: 'AC', name: 'Acre' },
    { uf: 'AL', name: 'Alagoas' },
    { uf: 'AP', name: 'Amapá' },
    { uf: 'AM', name: 'Amazonas' },
    { uf: 'BA', name: 'Bahia' },
    { uf: 'CE', name: 'Ceará' },
    { uf: 'DF', name: 'Distrito Federal' },
    { uf: 'ES', name: 'Espírito Santo' },
    { uf: 'GO', name: 'Goiás' },
    { uf: 'MA', name: 'Maranhão' },
    { uf: 'MT', name: 'Mato Grosso' },
    { uf: 'MS', name: 'Mato Grosso do Sul' },
    { uf: 'MG', name: 'Minas Gerais' },
    { uf: 'PA', name: 'Pará' },
    { uf: 'PB', name: 'Paraíba' },
    { uf: 'PR', name: 'Paraná' },
    { uf: 'PE', name: 'Pernambuco' },
    { uf: 'PI', name: 'Piauí' },
    { uf: 'RJ', name: 'Rio de Janeiro' },
    { uf: 'RN', name: 'Rio Grande do Norte' },
    { uf: 'RS', name: 'Rio Grande do Sul' },
    { uf: 'RO', name: 'Rondônia' },
    { uf: 'RR', name: 'Roraima' },
    { uf: 'SC', name: 'Santa Catarina' },
    { uf: 'SP', name: 'São Paulo' },
    { uf: 'SE', name: 'Sergipe' },
    { uf: 'TO', name: 'Tocantins' }
    ];

    ufSelect.innerHTML = '<option value="" disabled selected>Escolha o Estado</option>';
    estados.forEach(estado => {
      const option = document.createElement('option');
      option.value = estado.uf;
      option.textContent = estado.name;
      if (estado.uf === selectedUf) {
        option.selected = true;
      }
      ufSelect.appendChild(option);
    });
  }

  // Call populateUfSelect on page load to fill the dropdown
  document.addEventListener('DOMContentLoaded', populateUfSelect);


  function VerificarCampos() {
    // Implement your form validation logic here
    // For example:
    const nomeFornecedor = document.getElementById('nome_fornecedor').value;
    if (nomeFornecedor.trim() === '') {
      alert('Por favor, preencha o nome do fornecedor.');
      event.preventDefault(); // Prevent form submission
    }
    // Add more validation for other fields as needed
  }
