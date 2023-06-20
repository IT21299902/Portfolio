
#include <stdio.h>
#include <string.h>
# define SIZE 1000


void minNumberOfOperations(char *s, int k){


int length = strlen(s);
int numberOfOperations = 0;


    for (int i = 0; i <= length - k; i++)  
    {   

        for (int j = i ; j < i + k; j++) 
        {   

            for (int c = j+1 ; c < i + k ; c++){

            
            if (s[j] == s[c] && s[j] !='#')
            {
                s[j] = '#';
                numberOfOperations++;
            }
        }
    }
    }

    printf("String                        :");
    for(int i = 0 ; i < length ; i++){
    printf("%c " , s[i]);
    }
    printf("\n---------------------------------------------------------------------------\n");

    printf("-----------------------------------------------------------------------------\n");
    printf("\t\tnumber of operations is   :%d" , numberOfOperations);
    printf("\n---------------------------------------------------------------------------");
    

     
}


int main(void)
{

    char input[SIZE];
    int subStringLength = 0;

   
        printf("\n---------------------------------------------------------------------------\n");
        printf("Enter the string              :");

 
        scanf("%s", input);
 
   
        printf("Enter the length of substring :");


    scanf("%d", &subStringLength);

    minNumberOfOperations(input, subStringLength);


return 0;

/*...........................................end of the programme........................................
..................................Done by  : Asmath zakey (ZAKEY M.S.M.A)................................
.................................................IT21299902..............................................*/

}

