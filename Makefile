all:
	sudo mkdir -p /home/user/data/mariadb_volume/
	sudo mkdir -p /home/user/data/wordpress_volume/
	sudo docker-compose -f ./srcs/docker-compose.yml up -d --build
clean:
	sudo docker-compose -f srcs/docker-compose.yml down
	sudo docker container prune;

fclean: clean
	sudo rm -rf /home/user/data/mariadb_volume
	sudo rm -rf /home/user/data/wordpress_volume
	sudo docker system prune -a --force --volumes

re: fclean all

.PHONY: up down clean fclean re all
