#include <stdio.h>
#include <stdlib.h>
#include <string.h>
//#define  ""


void usage(FILE *out, char *program)
{
	fprintf(out, "usage: %s [0x code]\n",program );
}

int convert(char *xcode)
{
	// check if xcode is 2*x
	if(strlen(xcode)%2 != 0)
	{
		printf("error: not invaild 16 bin code! check it and try again.\n");
		//exit(-1);
		return -1;
	}
	printf("------------------------\n");
	//info(xcode);
	 convert_s(xcode);
	printf("\n------------------------\n");

	//printf("%s\n", zh_str);
	return 0;
}

int convert_s(char *str)
{
	char *buf = malloc(sizeof(char)*2);
	int i;
	for(;*str;str+=2)	
{	i = strtol(strncpy(buf, str, 2), NULL, 16);
	//i = atoi(strncpy(buf, str, 2));
	printf("%c", i);
}
	free(buf);
	return 0;
}

int info(char *str)
{
	printf("str: %s\t sizeof(str):%d\tlen:%d\n", str, sizeof(str), strlen(str));
	// compare
	strcpy(str, "÷–Œƒ≤‚ ‘");
	printf("str: %s\t sizeof(str):%d\tlen:%d\n", str, sizeof(str), strlen(str));
	char *tmp = str;
	int len = strlen(str);
	while(*str)
	printf("%0l", *str++);
	str = str - len; //strlen(str);
	printf("~~~~~%s~~~~%s~~\n", str, tmp);
	while(*tmp)
	printf("%l", *tmp++);
	printf("-------------\n");
	return 0;
}
//int convert_r(char *str)

int main(int argc, char **argv)
{
	switch(argc)
	{
		case 1:
			usage(stdout, argv[0]);
			break;
		case 2:
			convert(argv[1]);
			break;
		default:
			usage(stderr, argv[0]);
}
	return 0;
}

