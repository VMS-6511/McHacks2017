//Ryan Tse
//McHacks 2017
function scheduleOptimization() {

//Temp Data while others work on the database
//Will pull date/times from database and convert to Date type
  var start1 = "2013/05/29 12:30 PM";
  var end1 = "2013/05/29 01:00 PM";
  var start1 = new Date(Date.parse(start1));
  var end1 = new Date(Date.parse(end1));
  var weight1 = 5;

  var start2 = "2013/05/29 02:30 PM";
  var end2 = "2013/05/29 03:30 PM";
  var start2 = new Date(Date.parse(start2));
  var end2 = new Date(Date.parse(end2));
  var weight2 = 3;

  var start3 = "2013/05/29 01:00 PM";
  var end3 = "2013/05/29 02:30 PM";
  var start3 = new Date(Date.parse(start3));
  var end3 = new Date(Date.parse(end3));
  var weight3 = 6;

//This is the example list of events
//Along with some variables such as list size
  var eventList = [["eventID1",start1,end1,weight1],["eventID2",start2,end2,weight2],["eventID3",start3,end3,weight3]];
  var numberOfEvents = eventList.length;
//Testing with the console log to debug
//Reverse the list, that way events are in order of which one to attend first
  console.log(findMaxWeightRecursion(mergeSort(eventList), numberOfEvents)[1].reverse());
}

//Merge Sort to ensure that list of events are organized in a way where
//First elements are the earliest and last is the latest events
function mergeSort(eventList) {
  var numberOfEvents = eventList.length;
  if (numberOfEvents < 2){
    return eventList;
  }
 
  var middle = parseInt(numberOfEvents / 2);
  var left   = eventList.slice(0, middle);
  var right  = eventList.slice(middle, numberOfEvents);
 
  return merge(mergeSort(left), mergeSort(right));
}
//Merge helper function for mergeSort()
//Uses left[0] which is the event located at the left index 0
//[2] leads to the ending time because we are sorting from end times
function merge(left, right) {
  var result = [];
  while (left.length && right.length) {
      if (left[0][2] <= right[0][2]) {
          result.push(left.shift());
      } 
      else {
          result.push(right.shift());
      }
  }
 
  while (left.length) {
      result.push(left.shift());
 }

  while (right.length) {
      result.push(right.shift());
 }

  return result;
}

//Latest visited index where there were no schedule conflicts encountered
function latestNonConflict(eventList, numberOfEvents) {
  var index = numberOfEvents - 1;//Index == the last item on list
  if (((eventList[index])[1]) >= ((eventList[index-1])[2])) {
    return index;
  }
  else{
    return false;
  }
}

//This is a recursive function which returns the  weight based optimized number of events you can visit
//This also returns the path which it had followed (these are the events you want to attend)
//Using the helper function latestNonConflict(), it detects valid and non valid paths, only returning valid paths
function findMaxWeightRecursion(eventList, numberOfEvents) {
//Base Case
  if (numberOfEvents == 1) {
    return [(eventList[numberOfEvents-1])[3],[(eventList[numberOfEvents-1])]];
  }
// If only one element left in list, return that amount
//Start with base current weight and pathing
  var inlcudeWeight = (eventList[numberOfEvents-1])[3];
  var includedPath = [(eventList[numberOfEvents-1])];
//Index of last selected
  var lastSelected = latestNonConflict(eventList, numberOfEvents);
//Recurse
  if (lastSelected != false){
    inlcudeWeight += findMaxWeightRecursion(eventList, lastSelected)[0];
    includedPath = includedPath.concat(findMaxWeightRecursion(eventList, lastSelected)[1]);
  }

  var excludeWeight = findMaxWeightRecursion(eventList, numberOfEvents-1)[0];
  var excludePath = findMaxWeightRecursion(eventList, numberOfEvents-1);
  if (Math.max(inlcudeWeight, excludeWeight) == inlcudeWeight) {
   return [Math.max(inlcudeWeight, excludeWeight), includedPath]; 
  }
  else {
    return [Math.max(inlcudeWeight, excludeWeight), excludePath];
  }
}
