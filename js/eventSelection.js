function scheduleOptimization(){
  var start1 = "2013/05/29 12:30 PM";
  var end1 = "2013/05/29 01:30 PM";
  var start1 = new Date(Date.parse(start1));
  var end1 = new Date(Date.parse(end1));
  var weight1 = 5;

  var start2 = "2013/05/29 02:30 PM";
  var end2 = "2013/05/29 03:30 PM";
  var start2 = new Date(Date.parse(start2));
  var end2 = new Date(Date.parse(end2));
  var weight2 = 3;

  //var eventList = [["eventID1",start1,end1,weight1]];
  var eventList = [["eventID1",start1,end1,weight1],["eventID2",start2,end2,weight2]];
  var numberOfEvents = eventList.length;
  var optimizedEvents = [eventList[0]];
  var lastVisited = 0;

  var resultPath = []

//  if (numberOfEvents == 1) {
//    console.log(optimizedEvents);
//  }
//  else{
//    for (currentEventIndex = 1; currentEventIndex < numberOfEvents; currentEventIndex++) {
//      if ((eventList[currentEventIndex])[1] > (eventList[currentEventIndex-1])[2]) {
//        optimizedEvents = optimizedEvents.concat([eventList[currentEventIndex]]);
//        lastVisited = currentEventIndex;
//      }
//    }
//
//    console.log(optimizedEvents);
//    console.log(optimizedEvents[0]);
//    console.log(optimizedEvents[1]);
//  }
//  console.log(findMaxProfitRecursion(eventList, numberOfEvents));
  mergeSort(eventList);
  console.log(mergeSort(eventList));
  console.log(findMaxWeightRecursion(mergeSort(eventList), numberOfEvents));
}
 
function mergeSort(eventList){
  var numberOfEvents = eventList.length;
  if (numberOfEvents < 2){
    return eventList;
  }
 
  var middle = parseInt(numberOfEvents / 2);
  var left   = eventList.slice(0, middle);
  var right  = eventList.slice(middle, numberOfEvents);
 
  return merge(mergeSort(left), mergeSort(right));
}
 
function merge(left, right){
  var result = [];
  while (left.length && right.length) {
      if (left[0][2] <= right[0][2]) {
          result.push(left.shift());
      } else {
          result.push(right.shift());
      }
  }
 
  while (left.length)
      result.push(left.shift());
 
  while (right.length)
      result.push(right.shift());
 
  return result;
}

//function endSort(eventList){
//  var numberOfEvents = eventList.length;
//  if (numberOfEvents == 1){
//    console.log("numberOfEvents == 1");
//    return eventList;
//  }
//  else {

//    console.log("Before For");
//    for (index = 1; index < (numberOfEvents); index++) {
//      console.log("Start For");
//      console.log(eventComparator(eventList[index-1],eventList[index]));
//      if((eventComparator(eventList[index-1],eventList[index])) == false){
//        var tempVariable = eventList[index-1];
//        eventList[index-1] = eventList[index];
//        eventList[index] = tempVariable;
//      }
//    }
//    console.log("End of For");
//    return eventList;
//  }
//}

//function eventComparator(event1, event2){
//  console.log(event1[2] < event2[2]);
//  return (event1[2] < event2[2]); //Returns event True if event2 finishes later
//}

function latestNonConflict(eventList, numberOfEvents){
  var index = numberOfEvents - 1;//Index == the last item on list
  if (((eventList[index])[1]) >= ((eventList[index-1])[2])){
    return index;
  }
  else{
    return false;
  }
}

function findMaxWeightRecursion(eventList, numberOfEvents, resultPath){
  if (numberOfEvents == 1){
    return (eventList[numberOfEvents-1])[3];
  }// If only one element left in list, return that amount

  var inlcudeWeight = (eventList[numberOfEvents-1])[3];//Start with base current weight

  var lastSelected = latestNonConflict(eventList, numberOfEvents);//Last Selected pair starting from right

  if (lastSelected != false){
    inlcudeWeight = inlcudeWeight + (findMaxWeightRecursion(eventList, lastSelected-1));
  }

  var excludeWeight = findMaxWeightRecursion(eventList, numberOfEvents-1);
  console.log("End of a loop");
  return Math.max(inlcudeWeight, excludeWeight);
}


//{
//  sort(eventList, eventList+numberOfEvents, eventComparator);
//
//  return findMaxProfitRecursion(eventList, numberOfEvents)
//}