Этот файл пердназначен для описания принципа работы моего проекта. 
Цель задания: 
Автоматизировать введение в работу кластера ELK.

Послдеовательность действий:

vagrant up

#Поднимаются 6 нод : 
#  1. 3 "сервер" ноды, на который в последствии будет настроен elasticsearch  
#  2. прокси - необходим как удобно резервируемая точка отказа 
#  3. бакула - бэкап сервер
#  4. клиент - должен же кто то отправить данные в кластер 

cd ansible 
# Переход в папку с ansible инфраструктурой 

ansible-playbook playbooks/project -e host=cluster -e elasticsearch=1 
# Разом настроить весь кластер elasitcsearch 

ansible-playbook playbooks/project -e host=proxy -e proxy=1
# Настройка прокси 

ansible-playbook playbooks/project -e host=client -e client=1
# Настройка клиента
