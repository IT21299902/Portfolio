
#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>

/*----------------------------------------------------------Count_Dupticate_Sequence_Count function----------------------------------------------------------------------------------*/
// Function to check if an array of integers is a duplicate of any previously generated permutations
bool dupticate_Sequence_Count(int **total_Permutations, int maxSize, int *arr, int n) {
  for (int i = 0; i < maxSize; i++) {
    //dclaring doolian variable to keep track of duplicate sequence count. inititally assingnin it to true.
    bool dupFound = true;
    /*this for loop has i fcondition it will check the total_Permutations ech elements with the given array elements.
    if any single element found in  total_Permutations that doesnt match with given array element then loop will end and assinged to duplicates not found in sequence*/
    for (int j = 0; j < n; j++) {
      if (total_Permutations[i][j] != arr[j]) {
        dupFound = false;
        break;
      }
    }
    //if any duplicated sequence found it will return the value as true(1).
    if (dupFound) {
      return true;
    }
  }
  //If no duplicated sequnce is found in any row, the function returns false(0).
  return false;
}
/*----------------------------------------------------------end of Count_Dupticate_Sequence_Count function-----------------------------------------------------------------------------------*/

/*----------------------------------------------------------swapElements function----------------------------------------------------------------------------------------------------*/
/*this function take 2 elements of array A as integer pointers and swap there  values. created a varible called swapped 
element and assingned the value of element 01 to temp array. then swapped bothe elements and assingmed the value of swapped element to element 2*/
void swapElements(int *Element_01, int *Element_02) {
  int swappedElement = *Element_01;
  *Element_01 = *Element_02;
  *Element_02 = swappedElement;
}
/*-----------------------------------------------------end of swapElements function----------------------------------------------------------------------------------------------------*/




/*----------------------------------------------------------sequece_Generate function-----------------------------------------------------------------------------------------------*/   
// function to generate all possible permutations for an any given array.
void sequece_Generate(int *array_03, int front, int tail, int **total_Permutations, int *maxSize) {

  // if the front and tail equal that mean we have sequece that the size of given array
  if (front == tail) {
    // Check if the current permutation is a duplicate, and add it to the list of unique permutations if it isn't in the 2D array
    if (!dupticate_Sequence_Count(total_Permutations, *maxSize, array_03, tail + 1)) {
      for (int i = 0; i <= tail; i++) {
        total_Permutations[*maxSize][i] = array_03[i];
      }
      //then mxsize  is increamented by 1
        (*maxSize)++;
    }

    //after all that swap again and check for the seuqences that can formed with new order and again and again will swap and check for sewunces.
  } else {
    // generate all permutations by swapping each element with every other element in the array
    for (int i = front; i <= tail; i++) {
      swapElements(&array_03[front], &array_03[i]); //swap elements 
      sequece_Generate(array_03, front + 1, tail, total_Permutations, maxSize); //recursivly calling function to gnerate all possible sequences.
      swapElements(&array_03[front], &array_03[i]); // again swapping 
    }
  }
}
/*----------------------------------------------------------end of sequece_Generate function-----------------------------------------------------------------------------------------------*/   




/*--------------------------------------------------------------count_arithemtic_sequence function------------------------------------------------------------------------------------------*/   
// Function to count the number of arithmetic sequences in a 2D array of integers
int arithmetic_Sequnce_count(int **array_03, int maxSize, int array_03_Size) {
  // variable to count the arithemtic sequence count
  int sequenceCount = 0;
  for (int i = 0; i < maxSize; i++) {
    
    //taking the difference of the seuqnce between 2 elements
    int common_diff = array_03[i][1] - array_03[i][0];
    int arrayCount = 0;

    //if j is less than array_3 size 
    for (int j = 2; j < array_03_Size; j++) {
        // taking the difference of the array_03 between 2 elements and checking  annd adding array count by 1
      if (array_03[i][j] - array_03[i][j - 1] == common_diff) {
        arrayCount++;
      }
    }
    /*we obtained the value of d with using first 2 elements of the given array so we dont need to check those elements again . by dcreasing 2 we cheking the rest
    of elements.*/
    if (arrayCount == array_03_Size - 2) {
      sequenceCount++;
    }
  }

  //returning the finall value of  total arithmetci sequence count
  return sequenceCount;
}
/*---------------------------------------------------------end of count arithemtic sequence function----------------------------------------------------------------------------------------*/ 



//start of main body
int main() {

// variable declaration
int sizeA, sizeB ;

  // taking the user inputs to initiat the array sizes. 
printf("\n");
printf("--------------------------------------------------------------\n");
printf("Enter the size of array A & B              : ");
scanf("%d %d",&sizeA , &sizeB);
printf("--------------------------------------------------------------\n");  
  //assigning the array sizes that took as user inputs.
  int array_A[sizeA];
  int array_B[sizeB];
printf("\n");


// taking the user input as array element to array A
printf("--------------------------------------------------------------\n");
printf("Enter the elements of array A              :");
  for(int i = 0; i < sizeA; i++){
    scanf("%d" , &array_A[i]);
  }
printf("\n");

  // taking the user input as array element to array A
printf("Enter the elements of array B              :" );
  for(int i = 0; i < sizeB; i++){
scanf("%d" , &array_B[i]);
  }
printf("--------------------------------------------------------------\n");
printf("\n");

  // Calculating the number of total sequences that can be formed to take the value as the max size of 2D array9(factorial)
    int maxSequences = 1;
    for (int i = 1; i <= sizeA + sizeB; i++) {
        //if condition satisfy adding the multipliyng the value of maxsequences by (i)th value
        maxSequences *= i; 
    }


  // allocating the memory dinamically to the 2D array using above obtained values.
    int **total_Sequences = malloc(maxSequences * sizeof(int));
    /*The array has maxSequences rows and (sizeA + sizeB) columns. Each row of the array represents a possible 
    sequence of integers that can be formed by interleaving the elements of two input arrays A and B. The memory for
    the array is allocated dynamically using malloc()*/
    for (int i = 0; i < maxSequences; i++) {
        total_Sequences[i] = malloc((sizeA) * sizeof(int));
    }


    // this variable is to keep track of number of sequences created.
    int total_seq = 0;

  //generating sequence from start of frist element to end of the array A size ( gen seq and store it in 2 dimentional array)
  for(int a = 0; a < sizeA ; a++){
    for (int b = 0; b < sizeA  ; b++){
      for (int c = 0; c < sizeB  ; c++){
        sequece_Generate(array_A , 0 , sizeA - 1, total_Sequences, &total_seq);
        
        int swappedElements = array_A[b];
        array_A[b] = array_B[c];
        array_B[c] = swappedElements;
      } 
    }
  }

  //generating sequences from the  end of the array to upuntill  0 th index
    for(int a = 0; a < sizeA ; a++){
      for (int b = 0; b < sizeA  ; b++){
       for (int c = 0; c < sizeB  ; c++){
        sequece_Generate(array_A , 0 , sizeA - 1, total_Sequences, &total_seq);
        
        int swappedElements = array_A[sizeA-b];
        array_A[sizeA-b] = array_B[sizeB-c];
        array_B[sizeB-c] = swappedElements;
      } 
    }
  }

//printing the finall output (no of unique arithmetic sequensec of length of array A)
printf("The unique arithmetic sequnece count is    :%d\n" , arithmetic_Sequnce_count(total_Sequences, total_seq , sizeA));
printf("--------------------------------------------------------------\n");
printf("\n");
  
//releasing memeory becaue i used dinamic varibales and pointers
    for (int i = 0; i < maxSequences; i++) {
        free(total_Sequences[i]);
    }
    free(total_Sequences);
  
    return 0;
}
